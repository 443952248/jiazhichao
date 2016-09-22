<?php
session_start();
if($_POST[submit]!=""){
    $checks=$_POST[checks];
    if($checks==""){
        echo "<script>alert('验证码不能为空');window.location.href='index.php';</script>";
    }
    if($checks==$_SESSION[check_checks]){
        echo "<script>alert('用户登录成功!');window.location.href='index.php';</script>";
    }else{
        echo "<script> alert('您输入的验证码不正确!');window.location.href='index.php';</script>";
    }


}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
<!--    <meta http-equiv="refresh" content="0.1">-->
    <title>rand函数应用</title>
    <style type="text/css">
        .style1{
            font-size: 12px;
            color: #FFFFFF;
            font-weight: bold;
            height: 24px;
        }
    </style>
</head>
<body>
<form action="" method="post" name="form1">
    <table width="1003" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td width="168" height="169" background="images/index_01.gif"></td>
            <td width="685" height="169" background="images/index_02.gif"></td>
            <td width="150" height="169" background="images/index_03.gif"> </td>
        </tr>
        <tr>
            <td width="168" height="311" background="images/index_04.gif"></td>
            <td width="685"  background="images/index_05.gif">
                <table border="0">
                    <tr>
                        <td width="370" height="27" rowspan="5"></td>
                        <td>用户名：</td>
                        <td><input type="text" name="user" aria-hidden="用户名" style="height:20px " size="10"></td>
                    </tr>
                    <tr>
                        <td>密&nbsp;码：</td>
                        <td><input type="password" name="pwd" style="height:20px " size="10"></td>
                    </tr>
                    <tr>
                        <td>验证码：</td>
                        <td><input type="text" name="checks" style="height:20px " size="10"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><span class="style1"><img src="checks.php"></span></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="登录"></td>
                    </tr>
                </table>
            </td>
            <td width="150"  background="images/index_06.gif"> </td>
        </tr>
        <tr>
            <td width="168" height="169" background="images/index_07.gif"></td>
            <td width="685" height="169" background="images/index_08.gif"></td>
            <td width="150" height="169" background="images/index_09.gif"> </td>
        </tr>
    </table>
</form>
</body>
</html><?php
/**
 * Created by PhpStorm.
 * User: TMJoker
 * Date: 2016/7/8
 * Time: 16:18
 */