<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>编码</title>
</head>
<body>
<table>
    <form action="" method="get">
        <tr>
            <td><input type="text" name="content"></td>
            <td><input type="submit" name="submit"></td>
        </tr>
    </form>
</table>
<?php
$content = $_GET['content'];
echo "编码：".urlencode($content)."<br>";
echo "解码：".urldecode($content)."<br>";
?>
</body>
</html>