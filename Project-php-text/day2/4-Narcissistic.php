<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
	for($i=100;$i<=999;$i++){
		$a=floor($i/100);		//获取百位
		$b=floor($i%100/10);	//获取十位
		$c=$i%10;				//获取各位
		
		if(pow($a,3)+pow($b,3)+pow($c,3)==$i){
			echo $i,'<br>';
			}
		
		}
		
	/*
	$str ='abcdef';
	echo substr($str,0,3);
	*/
echo'<br><br>------------------------------------------------------------------------------------------------------------------------------------<br><br>';	
//求水仙花数的第二种方法
	for($i=100;$i<=999;$i++){
		$a=substr($i,0,1);
		$b=substr($i,1,1);
		$c=substr($i,2,1);
		if(pow($a,3)+pow($b,3)+pow($c,3)==$i){
			echo $i,'<br>';
			}
		}

	
	
?>
</body>
</html>