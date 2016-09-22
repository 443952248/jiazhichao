<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>以“*”分割字符串</title>
    <style>
        .td1{
            height: 34px;
            width:80px;
        }
    </style>
</head>
<body>
<form action="" method="post" name="form1">
    <table border="1" cellpadding="0" cellspacing="0" bgcolor="#faebd7" width="400">
        <tr>
            <td class="td1">添加题目：</td>
            <td align="lift"><input type="text" name="timu" id="timu" size="32"></td>
            <td></td>
        </tr>
        <tr>
            <td class="td1">添加选项：</td>
            <td>
                <textarea name="content" cols="30" rows="5" id="content"></textarea>
                <br>
                <span class="style1">注意，每个选项用*分割</span>
            </td>
            <td><input type="Submit" name="Submit" value="提交"></td>
        </tr>
        <tr>
            <?php ?>
            <td class="td1"><?php $timu=$_POST['timu']; echo "$timu"; ?></td>
            <td>
                <?php
                if($_POST[Submit]!=""){
                    $content=$_POST[content];
                    $data = explode('*',$content);
                    while(list($key,$value)=each($data)){
                        echo '<input type="checkbox" name="checkbox" value="checkbox">';
                        echo $value."\n";
                    }
                }
                ?>
            </td>
            <td width="50" height="50">&nbsp;</td>
        </tr>
    </table>
</form>

</body>
</html>