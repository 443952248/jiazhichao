<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
	$a=10;
	$b=$a;
	unset($a);
	echo $b;
?>
</body>
</html>