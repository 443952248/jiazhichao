<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<style type="text/css">
table{
	width:980px;
	margin:auto;
	border-collapse:collapse;
	}
tr{
	height:35px;}	

td{
	border:1px solid #000;
	border-collapse:collapse;
	padding-left:10px;
	}
</style>
</head>

<body>
<table>
<?php
	for($i=1;$i<=9;$i++){
		echo '<tr>';
		for($j=1;$j<=$i;$j++){
			echo "<td>{$j}*{$i}=".($j*$i).'</td>';
			}
		echo '</tr>';
		}
?>
</table>
</body>
</html>