<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
    <title>声明一个一维数组和一个二维数组，并输出</title>
</head>

<body>
<?php
/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 2016/6/29
 * Time: 21:39
 */
$arr = array("jia", "zhi", "chao", "wu", "hui", "li");
echo "<pre>";
print_r($arr);

$arry = array(
    "a1" => array("jia", "zhi", "chao"),
    "a2" => array("wu", "hui", "li"));
print_r($arry);
?>
</body>
</html>