<?php
namespace app\controller;

use app\BaseController;
use think\App;
use think\facade\Db;
use think\cache\driver\Redis;

class Index extends BaseController
{
    private $key = ["one","two","three","four","five","six","seven","eight","nine","ten"];
    private $key_num = ["one"=>0,"two"=>1,"three"=>2,"four"=>3,"five"=>4,"six"=>5,"seven"=>6,"eight"=>7,"nine"=>8,"ten"=>9];
    private $interval = 90; //开奖时间间隔
    private $limit = 50; //获取总数据行数
    //选号执行策略
    private $test_fun = [
        1=>"0,1,2,3,4","0,1,2,4,8","0,1,4,7,9","0,2,4,6,7","0,2,4,6,8","0,2,5,7,8","0,3,6,7,8","0,5,6,7,9","0,6,7,8,9","1,2,3,4,5",
        "1,2,5,6,8","1,2,7,8,9","1,3,5,7,9","1,3,6,7,8","1,5,6,7,9","1,6,7,8,9","1,4,5,6,7","1,4,6,7,8","1,4,6,7,9","2,3,4,5,6",
        "2,3,5,7,9","2,4,5,7,9","2,5,6,7,8","2,5,6,7,9","2,6,7,8,9","3,4,5,6,7","3,5,6,7,8","3,5,7,8,9","4,5,6,7,8","4,6,7,8,9",
        ];
    //选号策略的数量,和上面策略对应
    private $test_fun_time;
    public $redis = null;
    function __construct(App $app)
    {
        parent::__construct($app);
        $this->test_fun_time = count($this->test_fun);
    }

    function a(){
        echo phpinfo();
//        $redis = new Redis();
//        $redis->set('DepartmentModel','123');
//       //读取数据
//        $test = $redis->get('DepartmentModel');
//        echo $test;die;
//        //存储数据。存储的数据为序列化的，读出来会自动反序列化，所以不用担心
//        $redis->set('name411','lixuemin123111');
    }
    public function index($table = "one"){
        //查询倒数第二期, 错 > 2, 前limit期中是否有错(7)  返回true
        $last_2 = Db::table($table)
            ->order('code','desc')
            ->limit(1,1)
            ->select();
        //定义字段数组
        $color_field = [];
        $error_num = [];
        for ($i=1;$i<=$this->test_fun_time;$i++){
            $result_key = "result_$i";
            $line_key = "line_$i";
            $key = "color_$i"; //显示的标识
            $first_code =  $last_2[0]['code'] - ($this->limit/2);//25期内连错7次以上的

            //if($last_2[0][$line_key] >= 2 && $last_2[0][$result_key]=="错"){ //前一期“错2”的标识

                $error_7 = Db::table($table)
                    ->where("code","<=",$last_2[0]['code'])
                    ->where("code",">",$first_code)
                    ->where($line_key,">=",7)
                    ->where($result_key,"错")
                    ->count();
                if($error_7 >=1 ){
                    $color_field[] = $key;
                }
            //}
            $count = Db::table($table)
                ->order('code','desc')
                ->where("code",">",$first_code)
                ->where($result_key,"错")
                ->count();
            $error_num[$i] = $count;
        }
        print_r($color_field);
        return view("",['table'=>$table,'tft'=>$this->test_fun_time,"color_field"=>$color_field,"error_num"=>$error_num]);
    }

    public function data($table = "one"){

        $list = Db::table($table)
            ->order('code','desc')
            ->limit($this->limit)
            //->where("code","<=","912904") //用于测试为什么错误
            ->select();

        $data = [
            "code"=>0,
            "msg"=>"",
            "count"=>1000,
            "data"=>$list
        ];
        return json($data);
    }
    /*
     * 添加数据页面
     * */
    public function add(){
        //查询数据
        $last = Db::table('kaijiang')
            ->field("code,kj_time")
            ->limit(1)
            ->order('code','desc')
            ->find();
        //下期时间
        $next_time = empty($last)
            ?date("H:i:s",time()+$this->interval)
            :date("H:i:s",strtotime($last['kj_time'])+$this->interval);
        $next_code = $this->nextCode($last['code']);//下期编码
        $count= Db::table('kaijiang')->count();
        return view('',['next_code'=>$next_code,'next_time'=>$next_time,'count'=>$count]);
    }
    /*
     * 保存数据
     * */
    public function save(){
        $data = input(); //获取所有值
        $data['created_time'] = date("Y-m-d H:i:s");
        $date = substr(input("code"),0,-3);
        $data['kj_date'] = date("Y")."-"
            .substr(input("code"),0,-5)."-"
            .substr(input("code"),-5,-3);

        $data['kj'] = rtrim(input("kj"),",");
        //拆分中奖号码
        $n_array = explode(",",$data['kj']);
        if (count($n_array)!=10){
            $this->error("开奖数字不够10位！");
        }
        //键值为字段，数字为值，进行合并，为了插入数据
        $number = array_combine($this->key,$n_array);
        //将05 转换成 5
        foreach ($number as $k=>$v){$number[$k] = (int)$v;}
        $data['kj'] = implode(",",$number);
        //合并数组
        Db::name('kaijiang')->save($data);
        //统计数据
        $this->makeTestAll();
        return redirect('add');
    }
    //备用样式
    public function showList()
    {
        return view();
    }
/*
 * 根据https://305242.com/ 1.5分pk10手动复制代码到a.html
 * 正则匹配数据，写入到数据库
 * */
    public function makeKjData()
    {
        $path = "./kjdata/a.html";
        $content = file_get_contents($path);
        //匹配期号
        $pattern_code = '/<td data-v-14fd185c="" class="issue-numbers">(.*)<\/td>/U';
        $num_code = preg_match_all($pattern_code, $content, $matches_code);

        //匹配开奖数据
        $pattern_kj = '/<span data-v-14fd185c="" class="lottery-numbers">(.*)<\/span>/';
        $num_kj = preg_match_all($pattern_kj, $content, $matches_kj);
        //查找最后一期期号
        $last = Db::table('kaijiang')
            ->field("code,kj_time")
            ->limit(1)
            ->order('code','desc')
            ->find();
        $last_time = $last['kj_time'];
        //循环进行处理
        if ($num_code == $num_kj){
            for($i = 199; $i >= 0; $i--){

                $code = ltrim($matches_code[1][$i],"2020");
                $kj = $matches_kj[1][$i];
                if ($code > $last['code']){
                    $data = [];
                    $last_time = $this->kjTime($code);
                    $data['created_time'] = date("Y-m-d H:i:s");
                    $data['kj_date'] = date("Y")."-"
                        .substr($code,0,-5)."-"
                        .substr($code,-5,-3);
                    $data['kj_time'] = $last_time;
                    $data['code'] = $code;
                    $data['kj'] = $kj;
                    //拆分中奖号码
                    $n_array = explode(",",$data['kj']);
                    if (count($n_array)!=10){
                        $this->error("开奖数字不够10位！");
                    }
                    //将05 转换成 5
                    foreach ($n_array as $k=>$v){$n_array[$k] = (int)$v;}
                    $data['kj'] = implode(",",$n_array);
                    //合并数组
                    Db::name('kaijiang')->save($data);
                    echo $code.":".$data['kj']."</br>";
                }
            }
        }
        //更新全部开奖数据
        $this->makeTestAll();
    }

    /**
     * 更新全部开奖数据
     * */
    function makeTestAll(){
        ignore_user_abort(true);    //关掉浏览器，PHP脚本也可以继续执行.
        set_time_limit(0);          // 通过set_time_limit(0)可以让程序无限制的执行下去
        foreach ($this->key as $table){
            $this->makeTestNum($table);
            //echo "$table 完成</br>";
        }
    }
    /*
     * 读取数据，更新本期数据，写入结果，写入下期推测数据，
     * */
    public function makeTestNum($table = "one"){
        $start = time();
        ignore_user_abort(true);    //关掉浏览器，PHP脚本也可以继续执行.
        set_time_limit(0);          // 通过set_time_limit(0)可以让程序无限制的执行下去
        //查找当前表最后一条数据,在最后一条数据基础之上更新
        $last = Db::name($table)->order('code','desc')->limit(1)->find();
        $mix_code = !empty($last) ? $last['code']-1:0;
        //分块处理数据
        Db::table('kaijiang')
            ->order('code','asc')
            ->field("id,code,kj_date,kj_time,kj")
            ->where("code",">",$mix_code)
        ->chunk(100, function($data) use ($table){
            foreach ($data as $val) {
                unset($val['id']);
                //更新本期开奖结果
                $this->kjResult($val,$table);
                //$val是本期开奖数据，根据$val预测下期结果
                $this->predicted($val['code'],$val['kj'],$table);
            }
        });
        $scound = time()-$start;
        echo "$table 总用时：$scound 秒</br>";
    }

    /**
     * 根据开奖，将结果对错插入数据库
     * @param array $val 当前的期的数据
     * @param string $table 要插入的数据表
     **/
    function kjResult($val,$table)
    {
        $info = Db::table($table)->where('code',$val['code'])->find();
        $kj_array = explode(",",$val['kj']);
        $kj_int = $kj_array[$this->key_num[$table]];//根据表名获取开奖码位置
        //更新本期结果
        if (!empty($info)){
            //30个键值
            for($i=1;$i<= $this->test_fun_time;$i++){
                $result_key = "result_".$i;
                $test_key = "test_".$i;
                $val[$result_key] = $this->testResult($kj_int,$info[$test_key]);
            }
            $val['created_time'] = date("Y-m-d H:i:s");
            Db::name($table)
                ->where('code', $info['code'])
                ->update($val);
            //开奖结果的连续次数
            $this->requestLine($val,$table);
            //echo "{$info['code']} </br>";
        }
    }
    /**
     * 预测下期结果,并插入数据库
     * @param string $code 当前的期号
     * @param string $kj 当前的开奖号
     * @param string $table 要插入的数据表
     **/
    function predicted($code,$kj,$table){
        $next = [];
        $kj_array = $kj_array = explode(',',$kj);
        $next['code'] = $this->nextCode($code);
        //30个键值
        for($i=1;$i<=$this->test_fun_time;$i++){
            $test_key = "test_".$i;
            $next[$test_key] = $this->test($kj_array,$i);
        }
        Db::name($table)->save($next);
    }

    /**
     * 判断当前结果的连续情况
     * @param string $code 当前的期号
     * @param string $kj 当前的开奖号
     * @param string $table 要插入的数据表
     **/
    function requestLine($val,$table){
        //查询上一期结果
        $before_code = $val['code']-1;
        $field = "";
        //生成要查询的字段"line_1,result_1,....."
        for ($i=1;$i<= $this->test_fun_time ;$i++){
            $field .= "line_{$i},result_{$i}";
            $field .= $i== $this->test_fun_time ?"":","; //如果是第 test_fun_time 就不加末尾的逗号
        }

        $before = Db::table($table)
            ->field($field)
            ->where('code',$before_code)
            ->find();
        $line = []; //要更新的连续数据
        for ($i=1;$i<= $this->test_fun_time;$i++){
            $result_name = "result_".$i;
            $line_name = "line_".$i;
            if (!empty($before)){
                //如果相同，连续次数+1
                if ($val[$result_name] == $before[$result_name]){
                    $line[$line_name] = $before[$line_name] + 1;
                }else{
                    $line[$line_name] = 1;
                }
            }else{
                $line[$line_name] = 1;
            }
        }
        Db::name($table)
            ->where('code', $val['code'])
            ->update($line);
    }
    //获取下期的期号
    function nextCode($code){
        $num = substr($code,-3);
        if ($num == 960){
            $code = date("md")."001";
            $code = (int)$code;
        }else{
            $code += 1;
        }
        return $code;
    }
    /**
     * 根据上期开奖数据计算预测码
     * @param array $kj_array 开奖的数组
     **/
    function test($kj_array,$key){
        $test_array = []; //预测参数的数组
        $fun_num_arr = explode(",",$this->test_fun[$key]); //选择用第几个测略，
        foreach ($fun_num_arr as  $v){
            $test_array[] = $kj_array[$v];
        }
        sort($test_array);
        $test = implode(",",$test_array); //将预测的数组排序，并组成字符串
        return $test;
    }

    /**
     * @param 开奖数字，预测数字
     * @return string
     */
    function testResult($number,$test_num){
        $test_array = explode(",",$test_num);
        $result = in_array($number,$test_array)?
            "对":"错";
        return $result;
    }

    /**
     * @param 50期内的错误总数,统计量太大，只能用队列了
     * @return string
     */
    function errorNum($code){

    }
    /**
     * @param 开奖时间手动更新
     * @return string
     */
    function makeKjTime()
    {
        //分块处理数据
        foreach ($this->key as $table) {
            Db::table($table)
                ->order('code', 'asc')
                ->field("id,code,kj_date,kj_time,kj")
                ->chunk(100, function ($data) use ($table) {
                    foreach ($data as $val) {
                        $kj_time = $this->kjTime($val['code']);
                        Db::name($table)
                            ->where('id', $val['id'])
                            ->update(['kj_time' => $kj_time]);
                    }
                });
            echo "$table </br>";
        }

    }

    function kjTime($code){
        $num = substr($code, -3);
        $time = ((int)$num - 1) * 90 - (8 * 60 * 60);
        $kj_time = date("H:i:s", $time);
        return $kj_time;
    }

    /*
     * 统计（对，错，对...）这种三联组合组合出现的次数
     *
     * */
    function resulTime3(){
        //通过计算笛卡儿积,找到所有的三联组合
        $groups = $this->dikaer([["对","错"],["对","错"],["对","错"]]);
        //取出任意一个预测所有结果 one result_1
        foreach ($this->key as $table){
            echo "</br> $table </br>";
            $result_1_arr = Db::table($table)->column('result_1');
            $result_1_str = implode("",$result_1_arr);
            foreach ($groups as $group){
                $group_str = implode("",$group);
                $count = substr_count($result_1_str,$group_str);
                echo "$group_str 出现 $count 次</br>";
            }
        }

    }

/**
 * 计算笛卡尔积的算法
 * @author zhaoyang
 * @param array $arr 二维数组，子集是用于组合的数组
 * @return array
 * */
    function dikaer($arr){
        $arr1 = array();
        $result = array_shift($arr);
        while($arr2 = array_shift($arr)){
            $arr1 = $result;
            $result = array();
            foreach($arr1 as $v){
                foreach($arr2 as $v2){
                    if(!is_array($v))$v = array($v);
                    if(!is_array($v2))$v2 = array($v2);
                    $result[] = array_merge_recursive($v,$v2);
                }
            }
        }
        return $result;
    }

    /**
     *十个数字取出任意5个数字。有多少种组合
        1~10  5个数组取笛卡尔积，取出所有组合
        然后排序去重(计算量太大了，禁止执行)
     */
    public function tenDikaer(){
        $array = [];
        for ($i=0;$i<10;$i++){
            $array[] = range(1,10);
        }
        //$di_arr = $this->dikaer($array);
        //print_r($di_arr);

    }
    /*执行删除操作*/
    function delCode(){
        $start_code = input("start_code");
        $end_code = input("end_code");
        $msg = "";
        $del_num = Db::table('kaijiang')
            ->where('code','between',[$start_code,$end_code])
            ->delete();
        $msg .= "kaijaing删除{$del_num} | ";
        foreach ($this->key as $table){
            $del_num = Db::table($table)
                ->where('code','between',[$start_code,$end_code])
                ->delete();
            $msg .= "{$table}删除{$del_num} | ";
        }
        ob_start();
        $this->makeTestAll();
        ob_end_clean();
        echo json_encode(["msg"=>$msg]);
    }

}
