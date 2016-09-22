<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
//echo "<table border = '1' >";
//    echo "<tr>";
//        echo "<td>PHP_SELF</td>";
//        echo "<td>\$_SERVER['PHP_SELF']</td>";
//        echo "<td>".$_SERVER['PHP_SELF']."</td>";
//        echo "<td>代表当前网页的地址</td>";
//    echo "</tr>";
//echo "</table>";

$arr1 = array('PHP_SELF','DOCUMENT_ROOT','SERVER_NAME','REMOTE_ADDR','SCRIPT_FILENAME');
$arr2 = array('当前网页路径','站点根目录','服务器名','客户端IP','网页物理路径');
echo "<table border='1' rules=\"all\">";
    foreach($arr1 as $key => $value){
        echo "<tr>";
        echo "<td>$value</td>";
        echo "<td>"."$"."_SERVER['$value']"."</td>";
        echo "<td>".$_SERVER[$value]."</td>";
        echo "<td>".$arr2[$key]."</td>";
    }

?>
</body>
</html>