<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style type="text/css">
        body,td,th{
            font-size: 12px;
        }
        body{
            margin-left: 20px;
            margin-right: 20px;
        }
    </style>
    <meta http-equiv="content-type" content="text/html" charset="UTF-8">
    <title>判断字符串</title>
</head>
<body>
    <table border="1" align="center" cellpadding="0" cellspacing="0">
        <form method="post" action="#">
        <tr>
            <td height="25">请输入25位数字：</td>
            <td><input type="text" name="text" maxlength="25" size="28"></td>
            <td><input type="submit" value="检测"></td>
        </tr>
        <tr>
            <td colspan="3" height="25" align="center" valign="middle">
                <?php
                if($_POST['text'] != ''){
                    $number = $_POST['text'];
                    if(is_numeric($number) and strlen($number) <= 25){
                        echo '输入正确，输入的数字是：'.$number;
                    }else{
                        echo '输入不正确';
                    }

                }

                ?>
            </td>
        </tr>
        </form>
    </table>
</body>
</html>