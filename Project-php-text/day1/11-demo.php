<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<!--    --><?php
//    if(isset($_POST['button'])){
//        $num=$_POST['num'];
//        if($num%2==0){
//            echo "{$num}是偶数";
//            echo '<br/>';
//        }else{
//            echo "{$num}是奇数";
//            echo '<br/>';
//        }
//
//    }
//    ?>
    <?php
    if(isset($_POST['button'])){
        $num = $_POST['num'];
        if(is_numeric($num)){
			//将字符串数组转成数字
			$num+=0;
			//is_int判断的是不是整型
            if(is_int($num)){
				if($num%2==0){
					echo "{$num}是偶数";
				}else{
					echo "{$num}是奇数";}
            }else{
                echo "{$num}不是整数";
            }

        }else{
            echo "{$num}不是数字";
        }


    }
    ?>
<form name="form1" method="post" action="#">
   <table width="500" border="1" align="center" rules="all" >
    <tr>
      <th colspan="2" align="center">判断是否为？</th>
     </tr>
    <tr>
      <td width="212">请输入一个数：</td>
      <td width="212"><input type="text" name="num" id="num"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="button" id="button" value="提交"></td>
     </tr>
  </table>
</form>
	
</body>
</html>
