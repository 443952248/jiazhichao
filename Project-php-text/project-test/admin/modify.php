<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../style/common.css">
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: TMJoker
 * Date: 2016/3/30
 * Time: 15:51
 */
$id = $_GET['id'];//获取修改商品的编号
//echo "$id";
mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db('data');
mysql_query('set names utf8');

//
if(isset($_POST['button'])){
    //获取提交的数据
    $proname = $_POST['proname'];
    $proguige = $_POST['proguige'];
    $proprice = $_POST['proprice'];
    $proamount = $_POST['proamount'];
    $proimages = $_POST['proimages'];
    $proweb = $_POST['proweb'];
    //拼接sql语句

    $sql = "update products set proname='$proname',proguige='$proguige',proprice='$proprice',proamount='$proamount',proimages='proimages',proweb='$proweb' WHERE proid = $id";
//    echo $sql;
    if(mysql_query($sql)){
        header('location:admin.php');
    }else{
        echo "修改失败";
        echo mysql_error();
        exit();
    }

}

//取出ID对应的商品
$sql = "select * from products WHERE proid='$id'";
$rs = mysql_query($sql);
$rows = mysql_fetch_assoc($rs);


?>
<form name="form1" method="post" action="">
    <table width="500" border="1">
        <tr>
            <th colspan="2">修改商品</th>
        </tr>
        <tr>
            <td>名称：</td>
            <td><label for="proname"></label>
                <input type="text" name="proname" id="proname" value="<?php echo $rows['proname'];?>"></td>
        </tr>
        <tr>
            <td>规格：</td>
            <td><input type="text" name="proguige" id="proguige" value="<?php echo $rows['proguige'];?>"></td>
        </tr>
        <tr>
            <td>价格：</td>
            <td><input type="text" name="proprice" id="proprice" value="<?php echo $rows['proprice'];?>"></td>
        </tr>
        <tr>
            <td>库存量：</td>
            <td><input type="text" name="proamount" id="proamount" value="<?php echo $rows['proamount'];?>"></td>
        </tr>
        <tr>
            <td>图片地址：</td>
            <td><input type="text" name="proimages" id="proimages" value="<?php echo $rows['proimages'];?>"></td>
        </tr>
        <tr>
            <td>网址：</td>
            <td><input type="text" name="proweb" id="proweb" value="<?php echo $rows['proweb'];?>"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="button" id="button" value="修改">
                <input type="button" name="button2" id="button2" value="返回" onClick="location.href='admin.php'"></td>
        </tr>
    </table>
</form>
</body>
</html>

