<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style type="text/css">
        <!--
        .style1 {font-size: 13px}
        .style2 {
            font-size: 12px;
            color: #FF0000;
        }
        -->
    </style>
</head>
<script>
    function checkstr(str,digit){
        var n = 0;
        for(i=0;i<str.length;i++){
            var leg = str.charCodeAt(i);
            if(leg>255){
                n+=2;
            }else{
                n+=1;
            }
        }
        if (n>digit){
            return true;
        }else{
            return false;
        }
    }

    function checkname(){
        var name = form1.username.value;
        var pwd = form1.password.value;
        if(name==""){
            alert("用户名不能为空");
            form1.username.focus();
        }else{
            if(checkstr(name,20)){
                alert("用户名不能超过20个字节，请重新输入!");
                form1.username.focus();
            }
        }
        if(pwd ==""){
            alert("密码不能为空！");
            form1.password.focus();
        }
    }


</script>
<body>
<table width="393" border="1" cellpadding="2" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#FF3399">
    <form name="form1" method="post" action="">
        <tr align="center" bgcolor="#FF99CC">
            <td height="24" colspan="2"><span class="style1">用户注册</span></td>
        </tr>
        <tr bgcolor="#FF99CC">
            <td width="64" height="24" align="center" class="style1">用户名:</td>
            <td width="312" height="24"><input name="username" type="text" id="username" size="20" maxlength="50">
                <span class="style2">&nbsp;*&nbsp;用户名不能超过20个字节</span></td>
        </tr>
        <tr bgcolor="#FF99CC">
            <td height="24" align="center" class="style1">密&nbsp;&nbsp;码:</td>
            <td height="24"><input name="password" type="password" id="password" size="20" maxlength="50"></td>
        </tr>
        <tr bgcolor="#FF99CC">
            <td height="24" colspan="2" align="center"><input type="submit" name="Submit" value="注 册" onClick="checkname();"></td>
        </tr>
    </form>
</table>

</body>
</html>