<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<link rel="stylesheet" type="text/css" href="../style/common.css">
<script type="text/javascript">
    function jump(id){
        if(confirm('确定要删除吗？')){
            location.href='del.php?id='+id;
        }
    }
</script>
<body>
<?php
//链接数据库
mysql_connect('localhost','root','root')or die (mysql_error());
//选择数据库
mysql_select_db('data');
//设置字符编码
mysql_query('set names utf8');
//查询所有商品
$rs = mysql_query('select * from products ORDER BY proid DESC');
?>
<a href="add.php">添加商品</a>
<table width="980">
<tr>
	<th>编号</th>
    <th>商品名称</th>
    <th>规格</th>
    <th>商品价格</th>
    <th>库存量</th>
    <th>图片</th>
    <th>网址</th>
    <th>修改</th>
    <th>删除</th>
    <?php
	//循环匹配成关联数组
    while($rows=mysql_fetch_assoc($rs)){
		echo '<tr>';
		echo '<td>'.$rows['proID'].'</td>';
		echo '<td>'.$rows['proname'].'</td>';
		echo '<td>'.$rows['proguige'].'</td>';
		echo '<td>'.$rows['proprice'].'</td>';
		echo '<td>'.$rows['proamount'].'</td>';
		//echo '<td><img src="'.$rows['proimages'].'"></td>';
		echo $rows['proimages']==''?'<td>暂无图片</td>':'<td><img src="'.$rows['proimages'].'"</td>';
		echo '<td>'.$rows['proweb'].'</td>';
		echo '<td><input type="button" value="修改" onclick="location.href=\'modify.php?id='.$rows['proID'].'\'" /></td>';
		echo '<td><input type="button" value="删除" onclick="jump('.$rows['proID'].')"/></td>';
		echo'</tr>';
		}
	?>
</tr>
</table>
</body>
</html>