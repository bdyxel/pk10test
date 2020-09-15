<?php /*a:1:{s:64:"D:\workSpace\www\Code\ThinkPHP5\predictNum\view\index\index.html";i:1600002287;}*/ ?>
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
<table class="layui-hide" id="test"></table>
<script type="text/html" id="test_1_Tpl">
    {{# if (d.line_1== 2 && d.result_1== "错" ) { }}
        <p style="color: #00FF00" title="{{d.test_1}}(总错<?php echo htmlentities($error_num[1]); ?>)"><?php echo htmlentities($error_num[1]); ?>{{d.result_1}}【{{d.line_1}}】</p>
    {{# } else if(d.line_1>=3 && d.line_1<7 ) { }}
        <p style="color: #0000FF" title="{{d.test_1}}(总错<?php echo htmlentities($error_num[1]); ?>)"><?php echo htmlentities($error_num[1]); ?>{{d.result_1}}【{{d.line_1}}】</p>
    {{# } else if(d.line_1>=7) { }}
        <p style="color: red" title="{{d.test_1}}(总错<?php echo htmlentities($error_num[1]); ?>)"><?php echo htmlentities($error_num[1]); ?>{{d.result_1}}【{{d.line_1}}】</p>
    {{# } else { }}
        <p title="{{d.test_1}}(总错<?php echo htmlentities($error_num[1]); ?>)"><?php echo htmlentities($error_num[1]); ?>{{d.result_1}}【{{d.line_1}}】</p>
    {{# } }}
</script>

<script type="text/html" id="test_2_Tpl">
    {{# if (d.line_2== 2 && d.result_2== "错" ) { }}
    <p style="color: #00FF00" title="{{d.test_2}}(总错<?php echo htmlentities($error_num[2]); ?>)"><?php echo htmlentities($error_num[2]); ?>{{d.result_2}}【{{d.line_2}}】</p>
    {{# } else if(d.line_2>=3 && d.line_2<7 ) { }}
    <p style="color: #0000FF" title="{{d.test_2}}(总错<?php echo htmlentities($error_num[2]); ?>)"><?php echo htmlentities($error_num[2]); ?>{{d.result_2}}【{{d.line_2}}】</p>
    {{# } else if(d.line_2>=7) { }}
    <p style="color: red" title="{{d.test_2}}(总错<?php echo htmlentities($error_num[2]); ?>)"><?php echo htmlentities($error_num[2]); ?>{{d.result_2}}【{{d.line_2}}】</p>
    {{# } else { }}
    <p title="{{d.test_2}}(总错<?php echo htmlentities($error_num[2]); ?>)"><?php echo htmlentities($error_num[2]); ?>{{d.result_2}}【{{d.line_2}}】</p>
    {{# } }}
</script>

<script type="text/html" id="test_3_Tpl">
    {{# if (d.line_3== 2 && d.result_3== "错" ) { }}
    <p style="color: #00FF00" title="{{d.test_3}}(总错<?php echo htmlentities($error_num[3]); ?>)"><?php echo htmlentities($error_num[3]); ?>{{d.result_3}}【{{d.line_3}}】</p>
    {{# } else if(d.line_3>=3 && d.line_3<7 ) { }}
    <p style="color: #0000FF" title="{{d.test_3}}(总错<?php echo htmlentities($error_num[3]); ?>)"><?php echo htmlentities($error_num[3]); ?>{{d.result_3}}【{{d.line_3}}】</p>
    {{# } else if(d.line_3>=7) { }}
    <p style="color: red" title="{{d.test_3}}(总错<?php echo htmlentities($error_num[3]); ?>)"><?php echo htmlentities($error_num[3]); ?>{{d.result_3}}【{{d.line_3}}】</p>
    {{# } else { }}
    <p title="{{d.test_3}}(总错<?php echo htmlentities($error_num[3]); ?>)"><?php echo htmlentities($error_num[3]); ?>{{d.result_3}}【{{d.line_3}}】</p>
    {{# } }}
</script>

<script type="text/html" id="test_4_Tpl">
    {{# if (d.line_4== 2 && d.result_4== "错" ) { }}
    <p style="color: #00FF00" title="{{d.test_4}}(总错<?php echo htmlentities($error_num[4]); ?>)"><?php echo htmlentities($error_num[4]); ?>{{d.result_4}}【{{d.line_4}}】</p>
    {{# } else if(d.line_4>=3 && d.line_4<7 ) { }}
    <p style="color: #0000FF" title="{{d.test_4}}(总错<?php echo htmlentities($error_num[4]); ?>)"><?php echo htmlentities($error_num[4]); ?>{{d.result_4}}【{{d.line_4}}】</p>
    {{# } else if(d.line_4>=7) { }}
    <p style="color: red" title="{{d.test_4}}(总错<?php echo htmlentities($error_num[4]); ?>)"><?php echo htmlentities($error_num[4]); ?>{{d.result_4}}【{{d.line_4}}】</p>
    {{# } else { }}
    <p title="{{d.test_4}}(总错<?php echo htmlentities($error_num[4]); ?>)"><?php echo htmlentities($error_num[4]); ?>{{d.result_4}}【{{d.line_4}}】</p>
    {{# } }}
</script>

<script type="text/html" id="test_5_Tpl">
    {{# if (d.line_5== 2 && d.result_5== "错" ) { }}
    <p style="color: #00FF00" title="{{d.test_5}}(总错<?php echo htmlentities($error_num[5]); ?>)"><?php echo htmlentities($error_num[5]); ?>{{d.result_5}}【{{d.line_5}}】</p>
    {{# } else if(d.line_5>=3 && d.line_5<7 ) { }}
    <p style="color: #0000FF" title="{{d.test_5}}(总错<?php echo htmlentities($error_num[5]); ?>)"><?php echo htmlentities($error_num[5]); ?>{{d.result_5}}【{{d.line_5}}】</p>
    {{# } else if(d.line_5>=7) { }}
    <p style="color: red" title="{{d.test_5}}(总错<?php echo htmlentities($error_num[5]); ?>)"><?php echo htmlentities($error_num[5]); ?>{{d.result_5}}【{{d.line_5}}】</p>
    {{# } else { }}
    <p title="{{d.test_5}}(总错<?php echo htmlentities($error_num[5]); ?>)"><?php echo htmlentities($error_num[5]); ?>{{d.result_5}}【{{d.line_5}}】</p>
    {{# } }}
</script>

<script type="text/html" id="test_6_Tpl">
    {{# if (d.line_6== 2 && d.result_6== "错" ) { }}
    <p style="color: #00FF00" title="{{d.test_6}}(总错<?php echo htmlentities($error_num[6]); ?>)"><?php echo htmlentities($error_num[6]); ?>{{d.result_6}}【{{d.line_6}}】</p>
    {{# } else if(d.line_6>=3 && d.line_6<7 ) { }}
    <p style="color: #0000FF" title="{{d.test_6}}(总错<?php echo htmlentities($error_num[6]); ?>)"><?php echo htmlentities($error_num[6]); ?>{{d.result_6}}【{{d.line_6}}】</p>
    {{# } else if(d.line_6>=7) { }}
    <p style="color: red" title="{{d.test_6}}(总错<?php echo htmlentities($error_num[6]); ?>)"><?php echo htmlentities($error_num[6]); ?>{{d.result_6}}【{{d.line_6}}】</p>
    {{# } else { }}
    <p title="{{d.test_6}}(总错<?php echo htmlentities($error_num[6]); ?>)"><?php echo htmlentities($error_num[6]); ?>{{d.result_6}}【{{d.line_6}}】</p>
    {{# } }}
</script>

<script type="text/html" id="test_7_Tpl">
    {{# if (d.line_7== 2 && d.result_7== "错" ) { }}
    <p style="color: #00FF00" title="{{d.test_7}}(总错<?php echo htmlentities($error_num[7]); ?>)"><?php echo htmlentities($error_num[7]); ?>{{d.result_7}}【{{d.line_7}}】</p>
    {{# } else if(d.line_7>=3 && d.line_7<7 ) { }}
    <p style="color: #0000FF" title="{{d.test_7}}(总错<?php echo htmlentities($error_num[7]); ?>)"><?php echo htmlentities($error_num[7]); ?>{{d.result_7}}【{{d.line_7}}】</p>
    {{# } else if(d.line_7>=7) { }}
    <p style="color: red" title="{{d.test_7}}(总错<?php echo htmlentities($error_num[7]); ?>)"><?php echo htmlentities($error_num[7]); ?>{{d.result_7}}【{{d.line_7}}】</p>
    {{# } else { }}
    <p title="{{d.test_7}}(总错<?php echo htmlentities($error_num[7]); ?>)"><?php echo htmlentities($error_num[7]); ?>{{d.result_7}}【{{d.line_7}}】</p>
    {{# } }}
</script>

<script type="text/html" id="test_8_Tpl">
    {{# if (d.line_8== 2 && d.result_8== "错" ) { }}
    <p style="color: #00FF00" title="{{d.test_8}}(总错<?php echo htmlentities($error_num[8]); ?>)"><?php echo htmlentities($error_num[8]); ?>{{d.result_8}}【{{d.line_8}}】</p>
    {{# } else if(d.line_8>=3 && d.line_8<7 ) { }}
    <p style="color: #0000FF" title="{{d.test_8}}(总错<?php echo htmlentities($error_num[8]); ?>)"><?php echo htmlentities($error_num[8]); ?>{{d.result_8}}【{{d.line_8}}】</p>
    {{# } else if(d.line_8>=7) { }}
    <p style="color: red" title="{{d.test_8}}(总错<?php echo htmlentities($error_num[8]); ?>)"><?php echo htmlentities($error_num[8]); ?>{{d.result_8}}【{{d.line_8}}】</p>
    {{# } else { }}
    <p title="{{d.test_8}}(总错<?php echo htmlentities($error_num[8]); ?>)"><?php echo htmlentities($error_num[8]); ?>{{d.result_8}}【{{d.line_8}}】</p>
    {{# } }}
</script>

<script type="text/html" id="test_9_Tpl">
    {{# if (d.line_9== 2 && d.result_9== "错" ) { }}
    <p style="color: #00FF00" title="{{d.test_9}}(总错<?php echo htmlentities($error_num[9]); ?>)"><?php echo htmlentities($error_num[9]); ?>{{d.result_9}}【{{d.line_9}}】</p>
    {{# } else if(d.line_9>=3 && d.line_9<7 ) { }}
    <p style="color: #0000FF" title="{{d.test_9}}(总错<?php echo htmlentities($error_num[9]); ?>)"><?php echo htmlentities($error_num[9]); ?>{{d.result_9}}【{{d.line_9}}】</p>
    {{# } else if(d.line_9>=7) { }}
    <p style="color: red" title="{{d.test_9}}(总错<?php echo htmlentities($error_num[9]); ?>)"><?php echo htmlentities($error_num[9]); ?>{{d.result_9}}【{{d.line_9}}】</p>
    {{# } else { }}
    <p title="{{d.test_9}}(总错<?php echo htmlentities($error_num[9]); ?>)"><?php echo htmlentities($error_num[9]); ?>{{d.result_9}}【{{d.line_9}}】</p>
    {{# } }}
</script>

<script type="text/html" id="test_10_Tpl">
    {{# if (d.line_10== 2 && d.result_10== "错" ) { }}
    <p style="color: #00FF00" title="{{d.test_10}}(总错<?php echo htmlentities($error_num[10]); ?>)"><?php echo htmlentities($error_num[10]); ?>{{d.result_10}}【{{d.line_10}}】</p>
    {{# } else if(d.line_10>=3 && d.line_10<7 ) { }}
    <p style="color: #0000FF" title="{{d.test_10}}(总错<?php echo htmlentities($error_num[10]); ?>)"><?php echo htmlentities($error_num[10]); ?>{{d.result_10}}【{{d.line_10}}】</p>
    {{# } else if(d.line_10>=7) { }}
    <p style="color: red" title="{{d.test_10}}(总错<?php echo htmlentities($error_num[10]); ?>)"><?php echo htmlentities($error_num[10]); ?>{{d.result_10}}【{{d.line_10}}】</p>
    {{# } else { }}
    <p title="{{d.test_10}}(总错<?php echo htmlentities($error_num[10]); ?>)"><?php echo htmlentities($error_num[10]); ?>{{d.result_10}}【{{d.line_10}}】</p>
    {{# } }}
</script>
<script type="text/html" id="test_11_Tpl">
    {{# if (d.line_11== 2 && d.result_11== "错" ) { }}
    <p style="color: #00FF00" title="{{d.test_11}}(总错<?php echo htmlentities($error_num[11]); ?>)"><?php echo htmlentities($error_num[11]); ?>{{d.result_11}}【{{d.line_11}}】</p>
    {{# } else if(d.line_11>=3 && d.line_11<7 ) { }}
    <p style="color: #0000FF" title="{{d.test_11}}(总错<?php echo htmlentities($error_num[11]); ?>)"><?php echo htmlentities($error_num[11]); ?>{{d.result_11}}【{{d.line_11}}】</p>
    {{# } else if(d.line_11>=7) { }}
    <p style="color: red" title="{{d.test_11}}(总错<?php echo htmlentities($error_num[11]); ?>)"><?php echo htmlentities($error_num[11]); ?>{{d.result_11}}【{{d.line_11}}】</p>
    {{# } else { }}
    <p title="{{d.test_11}}(总错<?php echo htmlentities($error_num[11]); ?>)"><?php echo htmlentities($error_num[11]); ?>{{d.result_11}}【{{d.line_11}}】</p>
    {{# } }}
</script>

<script type="text/html" id="test_12_Tpl">
    {{# if (d.line_12== 2 && d.result_12== "错" ) { }}
    <p style="color: #00FF00" title="{{d.test_12}}(总错<?php echo htmlentities($error_num[12]); ?>)"><?php echo htmlentities($error_num[12]); ?>{{d.result_12}}【{{d.line_12}}】</p>
    {{# } else if(d.line_12>=3 && d.line_12<7 ) { }}
    <p style="color: #0000FF" title="{{d.test_12}}(总错<?php echo htmlentities($error_num[12]); ?>)"><?php echo htmlentities($error_num[12]); ?>{{d.result_12}}【{{d.line_12}}】</p>
    {{# } else if(d.line_12>=7) { }}
    <p style="color: red" title="{{d.test_12}}(总错<?php echo htmlentities($error_num[12]); ?>)"><?php echo htmlentities($error_num[12]); ?>{{d.result_12}}【{{d.line_12}}】</p>
    {{# } else { }}
    <p title="{{d.test_12}}(总错<?php echo htmlentities($error_num[12]); ?>)"><?php echo htmlentities($error_num[12]); ?>{{d.result_12}}【{{d.line_12}}】</p>
    {{# } }}
</script>

<script type="text/html" id="test_13_Tpl">
    {{# if (d.line_13== 2 && d.result_13== "错" ) { }}
    <p style="color: #00FF00" title="{{d.test_13}}(总错<?php echo htmlentities($error_num[13]); ?>)"><?php echo htmlentities($error_num[13]); ?>{{d.result_13}}【{{d.line_13}}】</p>
    {{# } else if(d.line_13>=3 && d.line_13<7 ) { }}
    <p style="color: #0000FF" title="{{d.test_13}}(总错<?php echo htmlentities($error_num[13]); ?>)"><?php echo htmlentities($error_num[13]); ?>{{d.result_13}}【{{d.line_13}}】</p>
    {{# } else if(d.line_13>=7) { }}
    <p style="color: red" title="{{d.test_13}}(总错<?php echo htmlentities($error_num[13]); ?>)"><?php echo htmlentities($error_num[13]); ?>{{d.result_13}}【{{d.line_13}}】</p>
    {{# } else { }}
    <p title="{{d.test_13}}(总错<?php echo htmlentities($error_num[13]); ?>)"><?php echo htmlentities($error_num[13]); ?>{{d.result_13}}【{{d.line_13}}】</p>
    {{# } }}
</script>

<script type="text/html" id="test_14_Tpl">
    {{# if (d.line_14== 2 && d.result_14== "错" ) { }}
    <p style="color: #00FF00" title="{{d.test_14}}(总错<?php echo htmlentities($error_num[14]); ?>)"><?php echo htmlentities($error_num[14]); ?>{{d.result_14}}【{{d.line_14}}】</p>
    {{# } else if(d.line_14>=3 && d.line_14<7 ) { }}
    <p style="color: #0000FF" title="{{d.test_14}}(总错<?php echo htmlentities($error_num[14]); ?>)"><?php echo htmlentities($error_num[14]); ?>{{d.result_14}}【{{d.line_14}}】</p>
    {{# } else if(d.line_14>=7) { }}
    <p style="color: red" title="{{d.test_14}}(总错<?php echo htmlentities($error_num[14]); ?>)"><?php echo htmlentities($error_num[14]); ?>{{d.result_14}}【{{d.line_14}}】</p>
    {{# } else { }}
    <p title="{{d.test_14}}(总错<?php echo htmlentities($error_num[14]); ?>)"><?php echo htmlentities($error_num[14]); ?>{{d.result_14}}【{{d.line_14}}】</p>
    {{# } }}
</script>

<script type="text/html" id="test_15_Tpl">
    {{# if (d.line_15== 2 && d.result_15== "错" ) { }}
    <p style="color: #00FF00" title="{{d.test_15}}(总错<?php echo htmlentities($error_num[15]); ?>)"><?php echo htmlentities($error_num[15]); ?>{{d.result_15}}【{{d.line_15}}】</p>
    {{# } else if(d.line_15>=3 && d.line_15<7 ) { }}
    <p style="color: #0000FF" title="{{d.test_15}}(总错<?php echo htmlentities($error_num[15]); ?>)"><?php echo htmlentities($error_num[15]); ?>{{d.result_15}}【{{d.line_15}}】</p>
    {{# } else if(d.line_15>=7) { }}
    <p style="color: red" title="{{d.test_15}}(总错<?php echo htmlentities($error_num[15]); ?>)"><?php echo htmlentities($error_num[15]); ?>{{d.result_15}}【{{d.line_15}}】</p>
    {{# } else { }}
    <p title="{{d.test_15}}(总错<?php echo htmlentities($error_num[15]); ?>)"><?php echo htmlentities($error_num[15]); ?>{{d.result_15}}【{{d.line_15}}】</p>
    {{# } }}
</script>

<script type="text/html" id="test_16_Tpl">
    {{# if (d.line_16== 2 && d.result_16== "错" ) { }}
    <p style="color: #00FF00" title="{{d.test_16}}(总错<?php echo htmlentities($error_num[16]); ?>)"><?php echo htmlentities($error_num[16]); ?>{{d.result_16}}【{{d.line_16}}】</p>
    {{# } else if(d.line_16>=3 && d.line_16<7 ) { }}
    <p style="color: #0000FF" title="{{d.test_16}}(总错<?php echo htmlentities($error_num[16]); ?>)"><?php echo htmlentities($error_num[16]); ?>{{d.result_16}}【{{d.line_16}}】</p>
    {{# } else if(d.line_16>=7) { }}
    <p style="color: red" title="{{d.test_16}}(总错<?php echo htmlentities($error_num[16]); ?>)"><?php echo htmlentities($error_num[16]); ?>{{d.result_16}}【{{d.line_16}}】</p>
    {{# } else { }}
    <p title="{{d.test_16}}(总错<?php echo htmlentities($error_num[16]); ?>)"><?php echo htmlentities($error_num[16]); ?>{{d.result_16}}【{{d.line_16}}】</p>
    {{# } }}
</script>

<script type="text/html" id="test_17_Tpl">
    {{# if (d.line_17== 2 && d.result_17== "错" ) { }}
    <p style="color: #00FF00" title="{{d.test_17}}(总错<?php echo htmlentities($error_num[17]); ?>)"><?php echo htmlentities($error_num[17]); ?>{{d.result_17}}【{{d.line_17}}】</p>
    {{# } else if(d.line_17>=3 && d.line_17<7 ) { }}
    <p style="color: #0000FF" title="{{d.test_17}}(总错<?php echo htmlentities($error_num[17]); ?>)"><?php echo htmlentities($error_num[17]); ?>{{d.result_17}}【{{d.line_17}}】</p>
    {{# } else if(d.line_17>=7) { }}
    <p style="color: red" title="{{d.test_17}}(总错<?php echo htmlentities($error_num[17]); ?>)"><?php echo htmlentities($error_num[17]); ?>{{d.result_17}}【{{d.line_17}}】</p>
    {{# } else { }}
    <p title="{{d.test_17}}(总错<?php echo htmlentities($error_num[17]); ?>)"><?php echo htmlentities($error_num[17]); ?>{{d.result_17}}【{{d.line_17}}】</p>
    {{# } }}
</script>

<script type="text/html" id="test_18_Tpl">
    {{# if (d.line_18== 2 && d.result_18== "错" ) { }}
    <p style="color: #00FF00" title="{{d.test_18}}(总错<?php echo htmlentities($error_num[18]); ?>)"><?php echo htmlentities($error_num[18]); ?>{{d.result_18}}【{{d.line_18}}】</p>
    {{# } else if(d.line_18>=3 && d.line_18<7 ) { }}
    <p style="color: #0000FF" title="{{d.test_18}}(总错<?php echo htmlentities($error_num[18]); ?>)"><?php echo htmlentities($error_num[18]); ?>{{d.result_18}}【{{d.line_18}}】</p>
    {{# } else if(d.line_18>=7) { }}
    <p style="color: red" title="{{d.test_18}}(总错<?php echo htmlentities($error_num[18]); ?>)"><?php echo htmlentities($error_num[18]); ?>{{d.result_18}}【{{d.line_18}}】</p>
    {{# } else { }}
    <p title="{{d.test_18}}(总错<?php echo htmlentities($error_num[18]); ?>)"><?php echo htmlentities($error_num[18]); ?>{{d.result_18}}【{{d.line_18}}】</p>
    {{# } }}
</script>

<script type="text/html" id="test_19_Tpl">
    {{# if (d.line_19== 2 && d.result_19== "错" ) { }}
    <p style="color: #00FF00" title="{{d.test_19}}(总错<?php echo htmlentities($error_num[19]); ?>)"><?php echo htmlentities($error_num[19]); ?>{{d.result_19}}【{{d.line_19}}】</p>
    {{# } else if(d.line_19>=3 && d.line_19<7 ) { }}
    <p style="color: #0000FF" title="{{d.test_19}}(总错<?php echo htmlentities($error_num[19]); ?>)"><?php echo htmlentities($error_num[19]); ?>{{d.result_19}}【{{d.line_19}}】</p>
    {{# } else if(d.line_19>=7) { }}
    <p style="color: red" title="{{d.test_19}}(总错<?php echo htmlentities($error_num[19]); ?>)"><?php echo htmlentities($error_num[19]); ?>{{d.result_19}}【{{d.line_19}}】</p>
    {{# } else { }}
    <p title="{{d.test_19}}(总错<?php echo htmlentities($error_num[19]); ?>)"><?php echo htmlentities($error_num[19]); ?>{{d.result_19}}【{{d.line_19}}】</p>
    {{# } }}
</script>

<script type="text/html" id="test_20_Tpl">
    {{# if (d.line_20== 2 && d.result_20== "错" ) { }}
    <p style="color: #00FF00" title="{{d.test_20}}(总错<?php echo htmlentities($error_num[20]); ?>)"><?php echo htmlentities($error_num[20]); ?>{{d.result_20}}【{{d.line_20}}】</p>
    {{# } else if(d.line_20>=3 && d.line_20<7 ) { }}
    <p style="color: #0000FF" title="{{d.test_20}}(总错<?php echo htmlentities($error_num[20]); ?>)"><?php echo htmlentities($error_num[20]); ?>{{d.result_20}}【{{d.line_20}}】</p>
    {{# } else if(d.line_20>=7) { }}
    <p style="color: red" title="{{d.test_20}}(总错<?php echo htmlentities($error_num[20]); ?>)"><?php echo htmlentities($error_num[20]); ?>{{d.result_20}}【{{d.line_20}}】</p>
    {{# } else { }}
    <p title="{{d.test_20}}(总错<?php echo htmlentities($error_num[20]); ?>)"><?php echo htmlentities($error_num[20]); ?>{{d.result_20}}【{{d.line_20}}】</p>
    {{# } }}
</script>
<script type="text/html" id="test_21_Tpl">
    {{# if (d.line_21== 2 && d.result_21== "错" ) { }}
    <p style="color: #00FF00" title="{{d.test_21}}(总错<?php echo htmlentities($error_num[21]); ?>)"><?php echo htmlentities($error_num[21]); ?>{{d.result_21}}【{{d.line_21}}】</p>
    {{# } else if(d.line_21>=3 && d.line_21<7 ) { }}
    <p style="color: #0000FF" title="{{d.test_21}}(总错<?php echo htmlentities($error_num[21]); ?>)"><?php echo htmlentities($error_num[21]); ?>{{d.result_21}}【{{d.line_21}}】</p>
    {{# } else if(d.line_21>=7) { }}
    <p style="color: red" title="{{d.test_21}}(总错<?php echo htmlentities($error_num[21]); ?>)"><?php echo htmlentities($error_num[21]); ?>{{d.result_21}}【{{d.line_21}}】</p>
    {{# } else { }}
    <p title="{{d.test_21}}(总错<?php echo htmlentities($error_num[21]); ?>)"><?php echo htmlentities($error_num[21]); ?>{{d.result_21}}【{{d.line_21}}】</p>
    {{# } }}
</script>

<script type="text/html" id="test_22_Tpl">
    {{# if (d.line_22== 2 && d.result_22== "错" ) { }}
    <p style="color: #00FF00" title="{{d.test_22}}(总错<?php echo htmlentities($error_num[22]); ?>)"><?php echo htmlentities($error_num[22]); ?>{{d.result_22}}【{{d.line_22}}】</p>
    {{# } else if(d.line_22>=3 && d.line_22<7 ) { }}
    <p style="color: #0000FF" title="{{d.test_22}}(总错<?php echo htmlentities($error_num[22]); ?>)"><?php echo htmlentities($error_num[22]); ?>{{d.result_22}}【{{d.line_22}}】</p>
    {{# } else if(d.line_22>=7) { }}
    <p style="color: red" title="{{d.test_22}}(总错<?php echo htmlentities($error_num[22]); ?>)"><?php echo htmlentities($error_num[22]); ?>{{d.result_22}}【{{d.line_22}}】</p>
    {{# } else { }}
    <p title="{{d.test_22}}(总错<?php echo htmlentities($error_num[22]); ?>)"><?php echo htmlentities($error_num[22]); ?>{{d.result_22}}【{{d.line_22}}】</p>
    {{# } }}
</script>

<script type="text/html" id="test_23_Tpl">
    {{# if (d.line_23== 2 && d.result_23== "错" ) { }}
    <p style="color: #00FF00" title="{{d.test_23}}(总错<?php echo htmlentities($error_num[23]); ?>)"><?php echo htmlentities($error_num[23]); ?>{{d.result_23}}【{{d.line_23}}】</p>
    {{# } else if(d.line_23>=3 && d.line_23<7 ) { }}
    <p style="color: #0000FF" title="{{d.test_23}}(总错<?php echo htmlentities($error_num[23]); ?>)"><?php echo htmlentities($error_num[23]); ?>{{d.result_23}}【{{d.line_23}}】</p>
    {{# } else if(d.line_23>=7) { }}
    <p style="color: red" title="{{d.test_23}}(总错<?php echo htmlentities($error_num[23]); ?>)"><?php echo htmlentities($error_num[23]); ?>{{d.result_23}}【{{d.line_23}}】</p>
    {{# } else { }}
    <p title="{{d.test_23}}(总错<?php echo htmlentities($error_num[23]); ?>)"><?php echo htmlentities($error_num[23]); ?>{{d.result_23}}【{{d.line_23}}】</p>
    {{# } }}
</script>

<script type="text/html" id="test_24_Tpl">
    {{# if (d.line_24== 2 && d.result_24== "错" ) { }}
    <p style="color: #00FF00" title="{{d.test_24}}(总错<?php echo htmlentities($error_num[24]); ?>)"><?php echo htmlentities($error_num[24]); ?>{{d.result_24}}【{{d.line_24}}】</p>
    {{# } else if(d.line_24>=3 && d.line_24<7 ) { }}
    <p style="color: #0000FF" title="{{d.test_24}}(总错<?php echo htmlentities($error_num[24]); ?>)"><?php echo htmlentities($error_num[24]); ?>{{d.result_24}}【{{d.line_24}}】</p>
    {{# } else if(d.line_24>=7) { }}
    <p style="color: red" title="{{d.test_24}}(总错<?php echo htmlentities($error_num[24]); ?>)"><?php echo htmlentities($error_num[24]); ?>{{d.result_24}}【{{d.line_24}}】</p>
    {{# } else { }}
    <p title="{{d.test_24}}(总错<?php echo htmlentities($error_num[24]); ?>)"><?php echo htmlentities($error_num[24]); ?>{{d.result_24}}【{{d.line_24}}】</p>
    {{# } }}
</script>

<script type="text/html" id="test_25_Tpl">
    {{# if (d.line_25== 2 && d.result_25== "错" ) { }}
    <p style="color: #00FF00" title="{{d.test_25}}(总错<?php echo htmlentities($error_num[25]); ?>)"><?php echo htmlentities($error_num[25]); ?>{{d.result_25}}【{{d.line_25}}】</p>
    {{# } else if(d.line_25>=3 && d.line_25<7 ) { }}
    <p style="color: #0000FF" title="{{d.test_25}}(总错<?php echo htmlentities($error_num[25]); ?>)"><?php echo htmlentities($error_num[25]); ?>{{d.result_25}}【{{d.line_25}}】</p>
    {{# } else if(d.line_25>=7) { }}
    <p style="color: red" title="{{d.test_25}}(总错<?php echo htmlentities($error_num[25]); ?>)"><?php echo htmlentities($error_num[25]); ?>{{d.result_25}}【{{d.line_25}}】</p>
    {{# } else { }}
    <p title="{{d.test_25}}(总错<?php echo htmlentities($error_num[25]); ?>)"><?php echo htmlentities($error_num[25]); ?>{{d.result_25}}【{{d.line_25}}】</p>
    {{# } }}
</script>

<script type="text/html" id="test_26_Tpl">
    {{# if (d.line_26== 2 && d.result_26== "错" ) { }}
    <p style="color: #00FF00" title="{{d.test_26}}(总错<?php echo htmlentities($error_num[26]); ?>)"><?php echo htmlentities($error_num[26]); ?>{{d.result_26}}【{{d.line_26}}】</p>
    {{# } else if(d.line_26>=3 && d.line_26<7 ) { }}
    <p style="color: #0000FF" title="{{d.test_26}}(总错<?php echo htmlentities($error_num[26]); ?>)"><?php echo htmlentities($error_num[26]); ?>{{d.result_26}}【{{d.line_26}}】</p>
    {{# } else if(d.line_26>=7) { }}
    <p style="color: red" title="{{d.test_26}}(总错<?php echo htmlentities($error_num[26]); ?>)"><?php echo htmlentities($error_num[26]); ?>{{d.result_26}}【{{d.line_26}}】</p>
    {{# } else { }}
    <p title="{{d.test_26}}(总错<?php echo htmlentities($error_num[26]); ?>)"><?php echo htmlentities($error_num[26]); ?>{{d.result_26}}【{{d.line_26}}】</p>
    {{# } }}
</script>

<script type="text/html" id="test_27_Tpl">
    {{# if (d.line_27== 2 && d.result_27== "错" ) { }}
    <p style="color: #00FF00" title="{{d.test_27}}(总错<?php echo htmlentities($error_num[27]); ?>)"><?php echo htmlentities($error_num[27]); ?>{{d.result_27}}【{{d.line_27}}】</p>
    {{# } else if(d.line_27>=3 && d.line_27<7 ) { }}
    <p style="color: #0000FF" title="{{d.test_27}}(总错<?php echo htmlentities($error_num[27]); ?>)"><?php echo htmlentities($error_num[27]); ?>{{d.result_27}}【{{d.line_27}}】</p>
    {{# } else if(d.line_27>=7) { }}
    <p style="color: red" title="{{d.test_27}}(总错<?php echo htmlentities($error_num[27]); ?>)"><?php echo htmlentities($error_num[27]); ?>{{d.result_27}}【{{d.line_27}}】</p>
    {{# } else { }}
    <p title="{{d.test_27}}(总错<?php echo htmlentities($error_num[27]); ?>)"><?php echo htmlentities($error_num[27]); ?>{{d.result_27}}【{{d.line_27}}】</p>
    {{# } }}
</script>

<script type="text/html" id="test_28_Tpl">
    {{# if (d.line_28== 2 && d.result_28== "错" ) { }}
    <p style="color: #00FF00" title="{{d.test_28}}(总错<?php echo htmlentities($error_num[28]); ?>)"><?php echo htmlentities($error_num[28]); ?>{{d.result_28}}【{{d.line_28}}】</p>
    {{# } else if(d.line_28>=3 && d.line_28<7 ) { }}
    <p style="color: #0000FF" title="{{d.test_28}}(总错<?php echo htmlentities($error_num[28]); ?>)"><?php echo htmlentities($error_num[28]); ?>{{d.result_28}}【{{d.line_28}}】</p>
    {{# } else if(d.line_28>=7) { }}
    <p style="color: red" title="{{d.test_28}}(总错<?php echo htmlentities($error_num[28]); ?>)"><?php echo htmlentities($error_num[28]); ?>{{d.result_28}}【{{d.line_28}}】</p>
    {{# } else { }}
    <p title="{{d.test_28}}(总错<?php echo htmlentities($error_num[28]); ?>)"><?php echo htmlentities($error_num[28]); ?>{{d.result_28}}【{{d.line_28}}】</p>
    {{# } }}
</script>

<script type="text/html" id="test_29_Tpl">
    {{# if (d.line_29== 2 && d.result_29== "错" ) { }}
    <p style="color: #00FF00" title="{{d.test_29}}(总错<?php echo htmlentities($error_num[29]); ?>)"><?php echo htmlentities($error_num[29]); ?>{{d.result_29}}【{{d.line_29}}】</p>
    {{# } else if(d.line_29>=3 && d.line_29<7 ) { }}
    <p style="color: #0000FF" title="{{d.test_29}}(总错<?php echo htmlentities($error_num[29]); ?>)"><?php echo htmlentities($error_num[29]); ?>{{d.result_29}}【{{d.line_29}}】</p>
    {{# } else if(d.line_29>=7) { }}
    <p style="color: red" title="{{d.test_29}}(总错<?php echo htmlentities($error_num[29]); ?>)"><?php echo htmlentities($error_num[29]); ?>{{d.result_29}}【{{d.line_29}}】</p>
    {{# } else { }}
    <p title="{{d.test_29}}(总错<?php echo htmlentities($error_num[29]); ?>)"><?php echo htmlentities($error_num[29]); ?>{{d.result_29}}【{{d.line_29}}】</p>
    {{# } }}
</script>

<script type="text/html" id="test_30_Tpl">
    {{# if (d.line_30== 2 && d.result_30== "错" ) { }}
    <p style="color: #00FF00" title="{{d.test_30}}(总错<?php echo htmlentities($error_num[30]); ?>)"><?php echo htmlentities($error_num[30]); ?>{{d.result_30}}【{{d.line_30}}】</p>
    {{# } else if(d.line_30>=3 && d.line_30<7 ) { }}
    <p style="color: #0000FF" title="{{d.test_30}}(总错<?php echo htmlentities($error_num[30]); ?>)"><?php echo htmlentities($error_num[30]); ?>{{d.result_30}}【{{d.line_30}}】</p>
    {{# } else if(d.line_30>=7) { }}
    <p style="color: red" title="{{d.test_30}}(总错<?php echo htmlentities($error_num[30]); ?>)"><?php echo htmlentities($error_num[30]); ?>{{d.result_30}}【{{d.line_30}}】</p>
    {{# } else { }}
    <p title="{{d.test_30}}(总错<?php echo htmlentities($error_num[30]); ?>)"><?php echo htmlentities($error_num[30]); ?>{{d.result_30}}【{{d.line_30}}】</p>
    {{# } }}
</script>
<script>
    layui.use('table', function(){
        var table = layui.table;
        setTimeout(function(){
            location.reload();
        }, 20000);
        table.render({
            elem: '#test'
            ,url:"<?php echo url('index/data'); ?>?table=<?php echo htmlentities($table); ?>"
            ,cellMinWidth: 80 //全局定义常规单元格的最小宽度，layui 2.2.1 新增
            ,cols: [[
                {field:'code', width:80, title: '期号', }
                //,{field:'kj', width:160, title: '开奖号码', }
                ,{field:'test_1', title: "<?php echo htmlentities($table); ?>", width: 80, templet: '#test_1_Tpl',<?php if(in_array("color_1",$color_field)): ?>style:"background-color: #FFE4E1;"<?php endif; ?> }
                ,{field:'test_2', title: '<?php echo htmlentities($table); ?>', width: 80, templet: '#test_2_Tpl',<?php if(in_array("color_2",$color_field)): ?>style:"background-color: #FFE4E1;"<?php endif; ?> }
                ,{field:'test_3', title: '<?php echo htmlentities($table); ?>', width: 80, templet: '#test_3_Tpl',<?php if(in_array("color_3",$color_field)): ?>style:"background-color: #FFE4E1;"<?php endif; ?>}
                ,{field:'test_4', title: '<?php echo htmlentities($table); ?>', width: 80, templet: '#test_4_Tpl',<?php if(in_array("color_4",$color_field)): ?>style:"background-color: #FFE4E1;"<?php endif; ?>}
                ,{field:'test_5', title: '<?php echo htmlentities($table); ?>', width: 80, templet: '#test_5_Tpl',<?php if(in_array("color_5",$color_field)): ?>style:"background-color: #FFE4E1;"<?php endif; ?>}
                ,{field:'test_6', title: '<?php echo htmlentities($table); ?>', width: 80, templet: '#test_6_Tpl',<?php if(in_array("color_6",$color_field)): ?>style:"background-color: #FFE4E1;"<?php endif; ?>}
                ,{field:'test_7', title: '<?php echo htmlentities($table); ?>', width: 80, templet: '#test_7_Tpl',<?php if(in_array("color_7",$color_field)): ?>style:"background-color: #FFE4E1;"<?php endif; ?>}
                ,{field:'test_8', title: '<?php echo htmlentities($table); ?>', width: 80, templet: '#test_8_Tpl',<?php if(in_array("color_8",$color_field)): ?>style:"background-color: #FFE4E1;"<?php endif; ?>}
                ,{field:'test_9', title: '<?php echo htmlentities($table); ?>', width: 80, templet: '#test_9_Tpl',<?php if(in_array("color_9",$color_field)): ?>style:"background-color: #FFE4E1;"<?php endif; ?>}
                ,{field:'test_10', title: '<?php echo htmlentities($table); ?>', width: 80, templet: '#test_10_Tpl',<?php if(in_array("color_10",$color_field)): ?>style:"background-color: #FFE4E1;"<?php endif; ?>}
                ,{field:'test_11', title: "<?php echo htmlentities($table); ?>", width: 80, templet: '#test_11_Tpl',<?php if(in_array("color_11",$color_field)): ?>style:"background-color: #FFE4E1;"<?php endif; ?>}
                ,{field:'test_12', title: '<?php echo htmlentities($table); ?>', width: 80, templet: '#test_12_Tpl',<?php if(in_array("color_12",$color_field)): ?>style:"background-color: #FFE4E1;"<?php endif; ?>}
                ,{field:'test_13', title: '<?php echo htmlentities($table); ?>', width: 80, templet: '#test_13_Tpl',<?php if(in_array("color_13",$color_field)): ?>style:"background-color: #FFE4E1;"<?php endif; ?>}
                ,{field:'test_14', title: '<?php echo htmlentities($table); ?>', width: 80, templet: '#test_14_Tpl',<?php if(in_array("color_14",$color_field)): ?>style:"background-color: #FFE4E1;"<?php endif; ?>}
                ,{field:'test_15', title: '<?php echo htmlentities($table); ?>', width: 80, templet: '#test_15_Tpl',<?php if(in_array("color_15",$color_field)): ?>style:"background-color: #FFE4E1;"<?php endif; ?>}
                ,{field:'test_16', title: '<?php echo htmlentities($table); ?>', width: 80, templet: '#test_16_Tpl',<?php if(in_array("color_16",$color_field)): ?>style:"background-color: #FFE4E1;"<?php endif; ?>}
                ,{field:'test_17', title: '<?php echo htmlentities($table); ?>', width: 80, templet: '#test_17_Tpl',<?php if(in_array("color_17",$color_field)): ?>style:"background-color: #FFE4E1;"<?php endif; ?>}
                ,{field:'test_18', title: '<?php echo htmlentities($table); ?>', width: 80, templet: '#test_18_Tpl',<?php if(in_array("color_18",$color_field)): ?>style:"background-color: #FFE4E1;"<?php endif; ?>}
                ,{field:'test_19', title: '<?php echo htmlentities($table); ?>', width: 80, templet: '#test_19_Tpl',<?php if(in_array("color_19",$color_field)): ?>style:"background-color: #FFE4E1;"<?php endif; ?>}
                ,{field:'test_20', title: '<?php echo htmlentities($table); ?>', width: 80, templet: '#test_20_Tpl',<?php if(in_array("color_20",$color_field)): ?>style:"background-color: #FFE4E1;"<?php endif; ?>}
                ,{field:'test_21', title: "<?php echo htmlentities($table); ?>", width: 80, templet: '#test_21_Tpl',<?php if(in_array("color_21",$color_field)): ?>style:"background-color: #FFE4E1;"<?php endif; ?>}
                ,{field:'test_22', title: '<?php echo htmlentities($table); ?>', width: 80, templet: '#test_22_Tpl',<?php if(in_array("color_22",$color_field)): ?>style:"background-color: #FFE4E1;"<?php endif; ?>}
                ,{field:'test_23', title: '<?php echo htmlentities($table); ?>', width: 80, templet: '#test_23_Tpl',<?php if(in_array("color_23",$color_field)): ?>style:"background-color: #FFE4E1;"<?php endif; ?>}
                ,{field:'test_24', title: '<?php echo htmlentities($table); ?>', width: 80, templet: '#test_24_Tpl',<?php if(in_array("color_24",$color_field)): ?>style:"background-color: #FFE4E1;"<?php endif; ?>}
                ,{field:'test_25', title: '<?php echo htmlentities($table); ?>', width: 80, templet: '#test_25_Tpl',<?php if(in_array("color_25",$color_field)): ?>style:"background-color: #FFE4E1;"<?php endif; ?>}
                ,{field:'test_26', title: '<?php echo htmlentities($table); ?>', width: 80, templet: '#test_26_Tpl',<?php if(in_array("color_26",$color_field)): ?>style:"background-color: #FFE4E1;"<?php endif; ?>}
                ,{field:'test_27', title: '<?php echo htmlentities($table); ?>', width: 80, templet: '#test_27_Tpl',<?php if(in_array("color_27",$color_field)): ?>style:"background-color: #FFE4E1;"<?php endif; ?>}
                ,{field:'test_28', title: '<?php echo htmlentities($table); ?>', width: 80, templet: '#test_28_Tpl',<?php if(in_array("color_28",$color_field)): ?>style:"background-color: #FFE4E1;"<?php endif; ?>}
                ,{field:'test_29', title: '<?php echo htmlentities($table); ?>', width: 80, templet: '#test_29_Tpl',<?php if(in_array("color_29",$color_field)): ?>style:"background-color: #FFE4E1;"<?php endif; ?>}
                ,{field:'test_30', title: '<?php echo htmlentities($table); ?>', width: 80, templet: '#test_30_Tpl',<?php if(in_array("color_30",$color_field)): ?>style:"background-color: #FFE4E1;"<?php endif; ?>}
            ]]
        });
    });
</script>
</body>
</html>