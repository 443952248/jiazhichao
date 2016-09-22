<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
//判断是否点击提交按钮
if(isset($_POST['button'])){
	$year=$_POST['year'];
	if(is_numeric($year)){
		$year+=0;//将字符串转换成int;
		if(is_int($year)){
			if($year>0){
				/*
				能被4整除，但是不能被100整除
				*/
				if($year%4==0&&$year%100!=0||$year%400==0){
					echo "{$year}是闰年";
				}else{
					echo "{$year}是平年";
					}
			}else{
				echo "年份不能为负数";
			}
		}else{
			echo "{$year}不是整数";
		}
	}else{
	  echo "{$year}不是数字";
	}
}
?>
<form name="form1" method="post" action="">
  <table width="498" border="1" align="center">
    <tr>
      <th colspan="2">判断闰年</th>
    </tr>
    <tr>
      <td width="241">请输入年份</td>
      <td width="241"><span id="sprytextfield1">
        <label for="text1"></label>
        <span class="textfieldRequiredMsg">需要提供一个值。</span></span>
        <label for="year"></label>
        <input type="text" name="year" id="year"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="button" id="button" value="提交"></td>
    </tr>
  </table>
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
</script>
</body>
</html>