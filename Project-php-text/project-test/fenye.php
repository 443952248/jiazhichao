
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
//定义页面大小
$pagesize = 10;
//求总记录数
$rs = mysql_query('select count(*) from products');
$rows = mysql_fetch_row($rs);   //将资源匹配成索引数组
$recordcount = $rows[0];        //总记录数

//求总页数
$pagecount=ceil($recordcount/$pagesize);
//echo $pagecount;

//获得传递的当前页码
$pageno=isset($_GET['pageno'])?$_GET['pageno']:1;
if($pageno<1){
    $pageno=1;
}
if($pageno>$pagecount){
    $pageno= $pagecount;
}


//求当前页的起始位置
$startno=($pageno-1)*$pagesize;
//获取当前页面信息
$sql = "select * from products limit $startno,$pagesize";
$rs=mysql_query($sql);


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

<!--循环页面-->
<table width="980">
    <tr>
        <td>
            <a href="?pageno=1">【首页】</a>
            <a href="?pageno=<?php echo $pageno - 1?>">【上一页】</a>
            <a href="?pageno=<?php echo $pageno + 1?>">【下一页】</a>
            <a href="?pageno=<?php echo $pagecount?>">【末页】</a>
        </td>
        <td>
            <?php
            for($i=1;$i<=$pagecount;$i++)
            {
                echo '<a href="?pageno='.$i.'">'.$i.'</a>&nbsp;';
            }
            ?>
        </td>
    </tr>
</table>

</body>
</html>
