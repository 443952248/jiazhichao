<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>showgoods</title>
    <link rel="stylesheet" type="text/css" href="style/common.css">
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: TMJoker
 * Date: 2016/3/25
 * Time: 16:02
 */
$link = @mysql_connect('localhost','root','')or die('数据库连接失败');
mysql_select_db('data')or die('数据库选择失败');
mysql_query('set names utf8');
$rs = mysql_query('select * from products ORDER by proid DESC');

?>
<table width="980">
    <tr>
        <th>编号</th>
        <th>商品名称</th>
        <th>规格</th>
        <th>价格</th>
        <th>库存量</th>
        <th>图片</th>
        <th>网址</th>
    </tr>
    <?php
    while($rows=mysql_fetch_assoc($rs)){
        echo '<tr>';
        echo '<td>'.$rows['proID'].'</td>';
        echo '<td>'.$rows['proname'].'</td>';
        echo '<td>'.$rows['proguige'].'</td>';
        echo '<td>'.$rows['proprice'].'</td>';
        echo '<td>'.$rows['proamount'].'</td>';
        echo $rows['proimages']==''?'<td>图片暂缺</td>':'<td><img src="'.$rows['proimages'].'"></td>';
        echo '<td>'.$rows['proweb'].'</td>';
        echo '</tr>';
    }
    ?>
</table>

</body>
</html>
