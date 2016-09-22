<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<!--    <meta http-equiv="refresh" content="1">-->
    <title>应用Session技术实现换聊天背景</title>
    <style>
        .style1 {
            font-weight: bold;
            font-size: 24px;
        }
    </style>
</head>
<?
$_SESSION[bgc] = $_POST[bg];
?>
<body style="background-color: <?php echo $_SESSION[bgc]; ?>">

<table border="1">
    <tr>
        <td colspan="2" align="center"><span class="style1">聊天室</span></td>
    </tr>
    <tr >
        <td width="209" height="479" valign="top"> ***进入聊天室,欢迎光临!!<br><?php echo date("Y-m-d H-i-s", time()); ?></td>
        <td valign="top">在这里显示聊天的内容,希望大家遵守聊天室的规则,不要在聊天室中传播不健康的和非法的内容,谢谢合作!</td>
    </tr>
    <tr>
        <form action="" method="post" name="form">
            <td colspan="2" align="center">在这里选择您喜欢的颜色，您的页面也将随即更新！<br>请选择您喜欢的风格：
                <select name="bg" id="bg">
                    <option value="green">草绿色</option>
                    <option value="yellow">亮黄色</option>
                    <option value="white">纯白色</option>
                    <option value="red">鲜红色</option>
                    <option value="gray">深灰色</option>
                    <option value="lavender" selected>熏衣草</option>
                </select>
                <input type="submit" name="submit" value="提交"></td>
        </form>
    </tr>
</table>
</body>
</html>