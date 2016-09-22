<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
//求数组中的最大值
$num=array(10,20,35,50,45,32,18);
$max=$num[0];
$sum = 0;
$sum1 = 0;

for($i=1,$m=count($num); $i<$m;$i++){
	if($num[$i]>$max){
		$max=$num[$i];}
	}
	echo "数组（10,20,35,50,45,32,18）中的最大值为：$max";
	echo"<hr>";
	
//数组求和
foreach($num as $v){
	$sum+=$v;
	}
	echo "数组的和为：$sum<hr>";
	
for($i=1,$m=count($num);$i<$m;$i++){
	$sum1 += $num[$i];
	}
	echo "数组的和为：$sum<hr>";
	
//求1~100的和
for($i=1,$sum=0;$i<=100;$i++){
	$sum = $sum+$i;
	}
	echo "1~100的和为：$sum";
?>
</body>
</html>