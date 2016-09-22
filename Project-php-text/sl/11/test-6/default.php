<?php
/**
 * Created by PhpStorm.
 * User: TMJoker
 * Date: 2016/7/6
 * Time: 15:07
 */
session_start();
$_SESSION[user]=$_POST[user];
$_SESSION[pwd]=$_POST[pwd];
if($_SESSION==""){
    echo "<script language='JavaScript'>alert('请通过正确路径登录！');history.back();</script>";
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<TABLE align="center" cellpadding="0" cellspacing="0">
    <TR align="center" valign="middle">
        <TD style="WIDTH:140px;COLOR:red;">
            当前用户：&nbsp;
            <?php if($_SESSION[user]=="tsoft"&&$_SESSION[pwd]=="111"){
                echo "管理员";
            }else{
                echo "普通用户";
            }
            ?>&nbsp;&nbsp;
        </TD>
        <TD width="70"><a href="default.php">博客首页</a></TD>
        <TD width="70">|&nbsp;<a href="default.php">我的文章</a></TD>
        <TD width="70">|&nbsp;<a href="default.php">我的相册</a></TD>
        <TD width="70">|&nbsp;<a href="default.php">音乐在线</a></TD>
        <TD width="70">|&nbsp;<a href="default.php">修改密码</a></TD>
        <?php
        if($_SESSION[user]=="tsoft"&&$_SESSION[pwd]=="111") {
            ?>
            <TD width="70">|&nbsp;<a href="default.php">用户管理</a></TD>

            <?php
        }
        ?>
    </TR>
</TABLE>
</body>
</html>

