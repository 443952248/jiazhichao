<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="../style/common.css">
<script type="text/javascript">
function check()
{
	//验证商品名称
	var proname = document.getElementById('proname'); 
	if(proname.value=='')
	{
		alert('商品名称不能为空');
		proname.focus();
		return false;	
	}
	//验证商品规格
	var proguige = document.getElementById('proguige');
	if(proguige.value=='')
	{
		alert('商品规格不能为空');
		proguige.focus();
		return false;
	}
	
	//验证价格
	var proprice = document.getElementById('proprice');
	if(proprice.value==''||isNaN(proprice.value))
	{
		alert('价格必须是一个数字')	;
		proprice.select();//选中内容
		return false;
	}
	//验证库存量
	var proamount = document.getElementById('proamount');
	if(proamount.value==''||isNaN(proamount.value)|| proamount.value.indexOf('.')!=-1)
	{
		alert('商品库存量必须是整数')	;
		proamount.focus();
		return false;
	}
}
</script>
</head>

<body>
<?php
if(isset($_POST['button']))
{
	//获取提交的数据
	$proname = $_POST['proname'];
	$proguige = $_POST['proguige'];
	$proprice = $_POST['proprice'];
	$proamount = $_POST['proamount'];
	$proimages = $_POST['proimages'];
	$proweb = $_POST['proweb'];
    //链接数据库
    mysql_connect('localhost','root','');
    mysql_select_db('data');
    mysql_query('set names utf8');
    //拼接一个SQL语句
    $msq = "insert into products VALUE (null,'$proname','$proguige','$proprice','$proamount','$proimages','$proweb')";
    //echo "$msq";
    //执行SQL语句
    if(mysql_query($msq)){
        echo "插入成功";
        header('location:admin.php');//跳转到admin页面
    }else{
        echo "插入失败";
    }

	
	}
?>

<form name="form1" method="post" action="" onSubmit="return check()">
  <table width="500" border="1">
    <tr>
      <th colspan="2">添加商品</th>
    </tr>
    <tr>
      <td>名称：</td>
      <td><label for="proname"></label>
      <input type="text" name="proname" id="proname"></td>
    </tr>
    <tr>
      <td>规格：</td>
      <td><input type="text" name="proguige" id="proguige"></td>
    </tr>
    <tr>
      <td>价格：</td>
      <td><input type="text" name="proprice" id="proprice"></td>
    </tr>
    <tr>
      <td>库存量：</td>
      <td><input type="text" name="proamount" id="proamount"></td>
    </tr>
    <tr>
      <td>图片地址：</td>
      <td><input type="text" name="proimages" id="proimages"></td>
    </tr>
    <tr>
      <td>网址：</td>
      <td><input type="text" name="proweb" id="proweb"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="button" id="button" value="提交">
      <input type="button" name="button2" id="button2" value="返回" onClick="location.href='admin.php'"></td>
    </tr>
  </table>
</form>
</body>
</html>