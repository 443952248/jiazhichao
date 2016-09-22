<?php
/**
 * Created by PhpStorm.
 * User: TMJoker
 * Date: 2016/4/8
 * Time: 17:49
 *  删除
 */
$id = $_GET['id'];
//echo $id;
//链接数据库
mysql_connect('localhost','root','')or die(mysql_error());
mysql_select_db('data');
mysql_query('set names utf8');
//拼接sql语句
$sql = "delete from products WHERE proid = $id";
if(mysql_query($sql)){
    header('location:admin.php');
}else{
    die(mysql_error());
}
