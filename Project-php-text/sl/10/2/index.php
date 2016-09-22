<?php  date_default_timezone_set("Etc/GMT-8");?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>计算两个时间的差</title>
</head>
<?php

function timecha(){
    $time1=mktime($_POST['time1-h'],$_POST['time1-m'],$_POST['time1-s']);
    $time2=mktime($_POST['time2-h'],$_POST['time2-m'],$_POST['time2-s']);
    return date("H-i-s",($time2-$time1));
}



?>
<body>
<form action="" method="post" name="form">
    <table border="1" cellpadding="0" cellspacing="0" bgcolor="#f5f5dc">
        <tr>
            <td>请输入时间1：</td>
            <td><input type="text" name="time1-h" placeholder="时" ><input type="text" name="time1-m" placeholder="分"><input type="text" name="time1-s" placeholder="秒"></td>
        </tr>
        <tr>
            <td>请输入时间2：</td>
            <td><input type="text" name="time2-h" placeholder="时" ><input type="text" name="time2-m" placeholder="分"><input type="text" name="time2-s" placeholder="秒"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="计算"></td>
        </tr>
        <tr>
            <td>两时间的差为：</td>
            <td><span id="cha"><?php echo timecha(); ?></span></td>
        </tr>
    </table>
</form>
<table width="742" height="55" border="3" cellpadding="5" cellspacing="4">
    <tr>
        <td width="716">距离下班时间还有<?php
            $dateY=date("Y");
            $datem=date("m");
            $dated=date("d");
            $dates1=mktime(17,10,0,$datem,$dated,$dateY);
            $dates2=time();
            $dates3=$dates1-$dates2;
            echo ceil($dates3/3600);
            ?>小时。</td>
    </tr>
</table>
<table width="742" height="55" border="3" cellpadding="5" cellspacing="4">
    <tr>
        <td width="716">距离下班时间还有<?php
            $dates1=mktime(17,10,0,$datem,$dated,$dateY);
            $dates2=time();
            $dates3=$dates1-$dates2;
            echo ceil($dates3/3600);
            ?>小时。</td>
    </tr>
</table>
</body>

</html>