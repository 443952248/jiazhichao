<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">
    <title>应用list()函数和each()函数将存储在数组中的图书名称和作者获取出来</title>
</head>

<body>
<form action="" method="post">
    <table border="0.5" cellspacing="0" cellpadding="0">
        <tr>
            <td>书名：</td>
            <td><input type="text" name="书名" id="bname"></td>
            <td>作者：</td>
            <td><input type="text" name="作者" id="zuozhe"></td>
            <td><input type="submit" name="submit" value="提交"></td>
        </tr>
    </table>
</form>
<?php
while(list($name,$zuozhe)=each($_POST)){
    if($name!='submit'){
        echo "$name=$zuozhe<br>";
    }

}
?>
</body>
</html>
