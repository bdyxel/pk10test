<?php /*a:1:{s:62:"D:\workSpace\www\Code\ThinkPHP5\predictNum\view\index\add.html";i:1598573587;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Layui</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/static/layui/css/layui.css"  media="all">
    <script src="/static/layui/layui.js" charset="utf-8"></script>
    <!-- 注意：如果你直接复制所有代码到本地，上述css,js路径需要改成你本地的 -->
</head>
<body>
<div style="padding: 20px; background-color: #F2F2F2;">
    <div class="layui-row layui-col-space15">
        <div class="layui-col-md3">
            <div class="layui-card">
                <div class="layui-card-header">开奖数据(<?php echo htmlentities($count); ?>)</div>
                <div class="layui-card-body">
                    <table class="layui-hide" id="LAY_table_user" lay-filter="user"></table>
                </div>
            </div>
        </div>
        <div class="layui-col-md9">
            <div class="layui-card">
                <div class="layui-card-header">卡片面板</div>
                <div class="layui-card-body">
                    <form class="layui-form" method="post" action="save">
                        <div class="layui-form-item">
                            <label class="layui-form-label">开奖期号</label>
                            <div class="layui-input-block">
                                <input type="text" value="<?php echo htmlentities($next_code); ?>" name="code" required  lay-verify="required" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">开奖时间</label>
                            <div class="layui-input-block">
                                <input value="<?php echo htmlentities($next_time); ?>" type="text" name="kj_time" required  lay-verify="required" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">开奖号码</label>
                            <div class="layui-input-block">
                                <input type="text" name="kj" required  lay-verify="required" placeholder="以逗号分隔" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
                                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div>
                    </br></br>
                </div>
            <!--删除操作-->
                <div class="layui-form-item"  style="text-align: center;">
                    <div class="layui-inline">
                        <label class="layui-form-label">删除code</label>
                        <div class="layui-input-inline" style="width: 100px;">
                            <input type="text" name="start_code" autocomplete="off" class="layui-input">
                        </div>
                        <div class="layui-form-mid">-</div>
                        <div class="layui-input-inline" style="width: 100px;">
                            <input type="text" name="end_code"  autocomplete="off" class="layui-input">
                        </div>
                        <button type="button" id="delCode" class="layui-btn layui-btn-sm layui-btn-danger">删除code</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    layui.use(['element', 'layer','table','form'], function(){
        var element = layui.element;
        var layer = layui.layer;
        var table = layui.table;
        var form = layui.form;
        var $ = layui.jquery;

        $("input[name='kj']").focus();
        $("input[name='kj']").keyup(function(event){
            var kc = new Array(97,98,99,100,101,102,103,104,105);
            for (var i = 0; i < kc.length; i++) {
                if (kc[i] == event.keyCode) {
                    var v = $("input[name='kj']").val();
                    $("input[name='kj']").val(v+",")
                }
            }
            if(event.keyCode == 96){
                var v = $("input[name='kj']").val();
                v = v.replace("0","10")
                $("input[name='kj']").val(v+",")

            }
        });

        //方法级渲染
        table.render({
            elem: '#LAY_table_user'
            ,url: "<?php echo url('index/data'); ?>"
            ,cols: [[
                {field:'code', width:80, title: '期号', }
                ,{field:'kj_time', width:86, title: '开奖时间'}
                ,{field:'kj', width:254, title: '开奖号码', }
            ]]
            ,id: 'testReload'
            ,page: false
        });

        var $ = layui.$, active = {
            reload: function(){
                var demoReload = $('#demoReload');

                //执行重载
                table.reload('testReload', {
                    page: {
                        curr: 1 //重新从第 1 页开始
                    }
                    ,where: {
                        key: {
                            id: demoReload.val()
                        }
                    }
                }, 'data');
            }
        };

        $('.demoTable .layui-btn').on('click', function(){
            var type = $(this).data('type');
            active[type] ? active[type].call(this) : '';
        });

        //监听提交
        form.on('submit(formDemo)', function(data){
            // layer.msg(JSON.stringify(data.field));
            // return true;
        });

        $('#delCode').on('click', function(){
            layer.confirm('确定执行删除操作么？', {
                btn: ['确定','在考虑一下'] //按钮
            }, function(){
                var start_code = $("input[name='start_code']").val();
                var end_code = $("input[name='end_code']").val();
                if(start_code == "" || end_code == ""){
                    layer.msg('code不能为空', {icon: 1});
                    return false;
                }
                $.post("<?php echo url('index/delCode'); ?>", { start_code: start_code, end_code: end_code },
                    function(res){
                        layer.msg(res.msg, {icon: 1});
                    },"json");

            });
        });
    });
</script>
</body>
</html>