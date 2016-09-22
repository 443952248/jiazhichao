<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>应用sort()函数对数组进行升序排序</title>
</head>
<body>
<?php
$arr=array(23,41,54,67,21,54,62,52,32,56,34,47,24,65);
sort($arr);
while(list($key,$val)=each($arr)){
    echo "$key-----$val<br>";
}
echo "<br><br>";

$array=sort($arr);
for($i=0;$i<count($arr);$i++){			//应用for循环语句输出数组元素
    echo $arr[$i]."&nbsp;&nbsp;";
}

?>
</body>
</html>