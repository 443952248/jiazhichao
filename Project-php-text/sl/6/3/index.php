<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>匹配HTML标签</title>
</head>
<body>
<table border="1" cellspacing="0" cellpadding="0">
    <form action="" method="post">
        <tr>
            <td><input type="text" name="htmlbq"></td>
            <td><input type="submit" name="Submit" value="检测"></td>
        </tr>
    </form>
</table>
<?php
if (isset($_POST['htmlbq'])) {
    $tags = $_POST['htmlbq'];
    if (trim($tags) != '') {
        $pattern = '/^<[\/]?[a-zA-z0-9 ="\';":]*>$/';
        if (preg_match($pattern, $tags) == 1) {
            $tags = str_replace('<', '&lt;', $tags);
            $tags = str_replace('>', '&gt;', $tags);
            $tags = str_replace('"', '&quot;', $tags);
            echo '输入格式正确： ' . $tags;
        } else {
            echo '输入格式错误！！';
        }
    }
}
?>
</body>
</html>