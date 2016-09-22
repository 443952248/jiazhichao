<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" http-equiv="content-type" content="text/html">
    <title>验证博客各表单元素是否为空</title>
    <style type="text/css">
        .xinhao {
            color: RED;
            padding-left: 5px;
        }
    </style>
</head>
<script language="javascript">
    function check() {
        if (myform.title.value == "") {
            alert("文章主题不能为空！！");
            myform.title.focus();
            return false;
        }
        if (myform.cont.value == "") {
            alert("文章内容不能为空！！");
            myform.cont.focus();
            return false;
        }
        if (myform.autor.value == "") {
            alert("文章作者不能为空！！");
            myform.autor.focus();
            return false;
        }
        alert("成功通过验证！");
    }
</script>
<body>
<form name="myform" method="post" action="">
<table width="500" border="1" bordercolor="#FFFFFF" cellpadding="1" cellspacing="1" bgcolor="99FF33">
    <tr>
        <td width="500" colspan="2" align="center"> 我的博客文章</td>
    </tr>
    <tr>
        <td align="center">文章主题：</td>
        <td><input type="text" name="title"><span class="xinhao">*</span></td>
    </tr>
    <tr>
        <td align="center">文章内容：</td>
        <td>
            <textarea name="cont" cols="40" rows="8" id="content"></textarea>
            <span class="xinhao">*</span>
        </td>
    </tr>
    <tr>
        <td align="center">作者：</td>
        <td><input type="text" name="autor"><span class="xinhao">*</span></td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            <input type="submit" name="submit" onClick="return check();" value="发表">
            &nbsp;&nbsp;
            <input type="reset" name="reset" value="重写">
        </td>
    </tr>
</table>
</form>
</body>
</html>