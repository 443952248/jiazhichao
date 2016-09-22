<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>搜索引擎</title>
    <style type="text/css">
        #baidu{
            width:350px;
        }
    </style>
</head>
<body>
<form action="" name="form" id="form" method="post" >
    <table align="center" width="500" border="1">
        <tr>
            <td><input type="text" name="baidu" id="baidu" align="center" width="300"></td>
            <td><input type="submit" name="submit" value="搜索"></td>
        </tr>
    </table>
</form>
<?php
$neirogn=$_POST['baidu'];
echo "您搜索的内容是：".$neirogn;
?>
</body>
</html>