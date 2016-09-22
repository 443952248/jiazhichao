<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>表单</title>
</head>
<body>
<form action="" method="post">
    <table width="700" border="1" cellpadding="0" cellspacing="0" bgcolor="#faebd7">
        <tr>
            <td>姓名：</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>性别：</td>
            <td><input type="radio" name="sex" value="1" checked>男 <input type="radio" name="sex" value="0">女</td>
        </tr>
        <tr>
            <td>地址：</td>
            <td>
                <select name="add" id="add">
                    <option value="0" selected>北京</option>
                    <option value="1">上海</option>
                    <option value="1">重庆</option>
                    <option value="1">天津</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>爱好：</td>
            <td>
                <input type="checkbox" name="like" value="1" checked>听歌
                <input type="checkbox" value="0">是否
                <input type="checkbox" value="0">篮球
                <input type="checkbox" value="0">IT
            </td>
        </tr>
        <tr>
            <td>本人照片</td>
            <td><input type="file" name="file"></td>
        </tr>
        <tr>
            <td>工作经验</td>
            <td><textarea name="text" id="text"></textarea></td>

        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="submit">
                <input type="reset" name="reser">
            </td>
        </tr>
    </table>
</form>
</body>
</html>