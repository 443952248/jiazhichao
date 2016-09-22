<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
//通过mysql_connect(数据库地址，用户名，密码)，返回一个数据库的连接对象
//TODO 链接数据库

//	$link = mysql_connect('localhost','root','root');
//	if($link){//在PHP中有值就为真，空值为假
//		echo '链接成功';
//		}else{
//			echo '链接失败';
//			}
/**
 * 优化代码，用or代替if判断
 */
//$link = mysql_connect('localhost','root','root')or die('链接失败');
/**
 * 在链接数据库之前用@来隐藏关键信息
 */
$link =@mysql_connect('localhost','root','root')or die('链接失败');

//TODO 选择数据库
/**
 * 选择数据库：方法一
 * mysql_query('use stu')or die('数据库链接失败');
 */
mysql_select_db('stu')or die('数据库链接失败');

//TODO 获取stu表的数据
$db=mysql_query('select from * stu');
var_dump($db);





?>
</body>
</html>