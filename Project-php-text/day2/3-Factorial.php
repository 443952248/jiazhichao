<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>

<body>
<?php
	if(isset($_POST['button'])){
		$num=$_POST['num'];
		if($num=='' || !is_numeric($num) || $num<0){
			echo '请输入大于等于0的数字';
		}else{
			//将字符串数字转化成数字类型
			$num += 0;	
			if(is_int($num)){
				if($num==0){
					echo '0!是1';
					}else{
						$result=1;
						for($i=1;$i<=$num;$i++){
							$result*=$i;
							}
							echo "{$num}的阶乘是{$result}";
						}
			}else{
				echo '您输入的不是整数'; 
			}
		}
	}
?>
<form name="form1" method="post" action="">
  <table width="500" border="1" align="center">
    <tr>
      <th colspan="2">求阶乘</th>
    </tr>
    <tr>
      <td>请输入一个数：</td>
      <td><label for="num"></label>
      <input type="text" name="num" id="num"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="button" id="button" value="提交"></td>
    </tr>
  </table>
</form>
</body>
</html>