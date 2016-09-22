<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>无标题文档</title>
</head>

<body>

<?php
//    $stu=array(1=>'a','b','c','d');
//    $stu = array('a',2=>'b','c',5=>'d','e','f');
//    $stu=array(1=>'a',2=>'b',3=>'c',4=>'d',5=>'e',6=>'f');
//    print_r($stu);

//    $a=5;
//    echo (++$a)+(++$a)+(++$a);

$a=10;
$b='10';
$a==$b;
if($a==$b){
    echo '相等';
}else{
    echo '不相等';
}
if($a===$b){
    echo '全相等';
}else{
    echo '不全相等';
}

echo '<br/>';

$ch=10;
$su=39;
if($ch<=11&&$su>=11){
    echo '成立';
}else{
    echo '不成立';
}

echo '<br/>';

?>
</body>
</html>