<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>输出二维数组</title>
</head>
<body>
<?php
    $arr = array('webname' => array('编程词典','编程110'),'weburl' => array('www.mrbccd.com','www.bc110.com'));
    foreach($arr as $key => $value){
        echo $key.'=>';
        foreach ($value as $vl) {
            echo '"'.$vl.'"';
        }
    }
?>
</body>
</html>