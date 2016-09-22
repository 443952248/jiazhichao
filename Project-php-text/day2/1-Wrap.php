<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<style type="text/css">
table{
	width:980px;
	border:1px solid #000;
	margin:auto;
	border-collapse:collapse;}
	
td{
	border:#000 solid 1px;}

</style>
</head>

<body>
<table>
	<tr>
    	<?php
        	for($i=1;$i<=100; $i++){
				echo '<td><img src="images/'.$i.'.jpg"></td>';
				if($i%10==0){
					echo "</tr><tr>";
				}
			}
		?>
    </tr>
</table>
</body>
</html>`