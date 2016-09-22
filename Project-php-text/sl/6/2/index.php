<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>匹配E-mail地址标签</title>
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0">
    <form method="post" action="#">
        <tr>
            <td height="25">输入Email：</td>
            <td height="25"><input name="email" type="text" /></td>
            <td><input type="submit" value="检测" /></td>
        </tr>
    </form>
</table>
<?php
$email = $_POST['email'];
if(trim($email) != ''){
//    $pattern = '/^[a-zA-Z][a-zA-z0-9-]*[@]([a-zA-Z0-9]*[.]){1,3}[a-zA-Z]*/';
    $pattern = '/\w[-\w.+]*@([A-Za-z0-9][-A-Za-z0-9]+\.)+[A-Za-z]{2,14}/';
    if(preg_match($pattern,$email) == 1){
        echo '输入格式正确： '.$email;
    }else{
        echo '输入格式错误！！';
    }
}
?>
</body>
</html>