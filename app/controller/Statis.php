<?php
namespace app\controller;

use app\BaseController;
use think\facade\Db;
class Statis extends BaseController
{
    private $key = ["one","two","three","four","five","six","seven","eight","nine","ten"];
    /**
     * 统计“连错之后对” 后面的结果分析
     * @param string $table 要统计的表名
     * @param int $field_num 要统计的字段后缀
     * */
    function resultErrorNmu($table = "one",$field_num=1){
        $result_num = "result_{$field_num}";
        $line_num = "line_{$field_num}";
        //第一个对的前面的id都是错的,查找连错7以上的，也就是line_1>7的;
        $right_id = Db::table($table)
            ->field("id")
            ->where($result_num, "对")
            ->where($line_num, 1)
            ->where('id',">", 10) //从哪期开始统计
            ->column("id");

        //将所有的id都减一
        array_walk($right_id, function(&$item){
            $item -= 1;
            return $item;
        });
        //对为1 前面就是连错的数量
        $wrong_7_id = Db::table($table)
            ->field("id")
            ->where($line_num,">",9) //这个数字是连错的数字
            ->where("id","in",$right_id)
            ->column("id");
        //过后的第二位,第三位.... 成功率
        $over = [];
        //查询大于7的后面10期的开奖结果
        $error_num = 0;
        foreach ($wrong_7_id as $id){
            $field_str = "id,$result_num,$line_num";
            $result = Db::table($table)
                ->field($field_str)
                ->where("id",">",$id)
                ->order("id")
                ->limit(6) //这个数字是取，当期连错结束后，后面去多少期数
                ->select();
            //print_r($result);
                //line_num 连续错误的期数
                foreach ($result as $v){
                    if ($v[$line_num] == 5 && $v[$result_num]=="错"){
                        $error_num +=1;
                    }
                }
//            print_r($result);
//            for($i=1;$i<=9;$i++){
//                $over[$i][] = $result[$i]['result_1'];
//            }
        }
        $count = count($wrong_7_id);
        echo "$table $field_num 失败比 $count 分之 $error_num </br>";
        return ["count"=>$count,'error_num'=>$error_num];
    }

    //查看一张表所有期数
    function resultErrorAll($table = "one"){
        $count = 0; //总数量
        $error_num = 0; //错误数量
        for ($i=1;$i<=20;$i++){
            $result = $this->resultErrorNmu($table,$i);
            $count += $result['count'];
            $error_num += $result['error_num'];
        }
        echo "$table 总次数 $count ，错误 $error_num 比例：" .round(($error_num/$count)*100,2)."% </br></br>";
        return ["count"=>$count,'error_num'=>$error_num];
    }
    //查看所有表
    function resultTableErrorAll(){
        echo "<h1> “连错后对跟计划一期”计划失败统计 </h1>";
        $count = 0; //总数量
        $error_num = 0; //错误数量
        foreach ($this->key as $table){
            $result = $this->resultErrorAll($table);
            $count += $result['count'];
            $error_num += $result['error_num'];
        }
        echo "</br> 总次数 $count ，错误 $error_num 比例："  .round(($error_num/$count)*100,2)."% </br></br>";;
    }

}