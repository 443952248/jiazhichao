<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
    <meta charset="UTF-8" http-equiv="content-type" content="text/html">
    <title>对检索到的用户输入的查询关键字进行加粗描红</title>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: TMJoker
 * Date: 2016/6/28
 * Time: 15:07
 */
$text = "白领女子公寓，温馨街南行200米，交通便利，亲情化专人管理，您的理想选择！";
    $test = $_POST[test1];
    echo str_ireplace($test, "<font color='red'><strong>" . $test . "</strong></font>", $text);


?>
</body>
</html>