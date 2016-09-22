<?php
$content = "北京,上海,天津,重庆,河北,山西,辽宁,吉林,黑龙江,江苏,浙江,安徽,福建,江西,山东,河南,湖北,湖南,其他";
$arr = explode(",",$content);
foreach($arr as $value){
    echo $value;
}

?>

<?php
$content = "北京,上海,天津,重庆,河北,山西,辽宁,吉林,黑龙江,江苏,浙江,安徽,福建,江西,山东,河南,湖北,湖南,其他";
$data=explode(",",$content);
for($index=0;$index<count($data);$index++){							//数组循环
    echo $data[$index];
    echo "</br>";
}
?>
