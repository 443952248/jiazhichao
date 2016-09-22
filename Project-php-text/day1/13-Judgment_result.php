<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
	if(isset($_POST['button'])){
		$yuwen = $_POST['yuwen'];
		$shuxue = $_POST['shuxue'];
		if($yuwen ==''||!is_numeric($yuwen)||$yuwen<0 ||$yuwen>100){
			echo "语文成绩不在0~100之间";
			}else if($shuxue ==''||!is_numeric($shuxue) ||$shuxue<0||$shuxue>100){
				echo "数学成绩不在0~100之间";
				}
		}else{
			echo "语文和数学成绩都在0~100之间".'<br />';
			}	
	if(isset($_POST['sum'])){
		$i = 1;
		$he = 0;
		while($i<=100){
	    		$he+=$i;
			$i++;
			}
			echo "{$he}是从0加到100的和";
		}
?>
<form name="form1" method="post" action="">

  <table width="500" border="1" align="center" rules="all">
    <tr>
      <th colspan="2">判断成绩</th>
    </tr>
    <tr>
      <td width="241">语文成绩</td>
      <td width="243"><label for="yuwen"></label>
      <input type="text" name="yuwen" id="yuwen"></td>
    </tr>
    <tr>
      <td>数学成绩</td>
      <td><label for="shuxue"></label>
      <input type="text" name="shuxue" id="shuxue"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="button" id="button" value="提交"></td>
    </tr>
    <tr>
      <td align="center">从0+到100的值为：</td>
      <td align="center"><label for="textarea">
        <input type="submit" name="sum" id="sum" value="提交">
      </label></td>
    </tr>
  </table>
</form> 
</body>
</html>