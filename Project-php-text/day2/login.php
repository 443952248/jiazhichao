<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="style/common.css">
</head>

<body>
<?php
if(isset($_POST['button']))  //判断是否点击登录按钮
{
	//用户输入的用户名和密码
	$username=$_POST['username'];
	$pwd=$_POST['pwd'];
	//连接数据库
	mysql_connect('127.0.0.1','root','') or die(mysql_error());//mysql_error()显示错误信息
	mysql_select_db('data');	//选择数据库
	mysql_query('set names utf8');	//设置客户端字符编码
	$sql="select * from `user` where username='$username' and `password`='$pwd'";
	$rs=mysql_query($sql);
	//获取结果集的记录数
	if(mysql_num_rows($rs)==1)
	{
		//echo '登录成功';
		//登录成功后，跳转到商品显示页面,用header('location:url地址')来跳转
		//header('location:showgoods.php');
		header('location:http://www.baidu.com');
	}
	else
	{
		echo '登录失败';
	}
}
?>
<form name="form1" method="post" action="">
  <table width="500" border="1" align="center">
    <tr>
      <th colspan="2">用户登录</th>
    </tr>
    <tr>
      <td>用户名：</td>
      <td><input type="text" name="username" id="username"></td>
    </tr>
    <tr>
      <td>密码：</td>
      <td><input name="pwd" type="password" id="pwd" value=""></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="button" id="button" value="提交"></td>
    </tr>
  </table>
</form>
</body>
</html>