<?php
/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 2016/3/17
 * Time: 21:52
 */

/**
 * 遍历数组
 * 如需遍历并输出关联数组的所有值，您可以使用 foreach 循环
 */

$age=array("jia"=>"1","zhi"=>"2","chao"=>"3");
foreach ($age as $x=>$xvalue) {
    echo "Key=".$x .",Value=".$xvalue;
    echo "<br>";
}
?>

<?php
$arr = array("one", "two", "three");
reset($arr);
while (list($key, $value) = each($arr)) {
    echo "Key: $key; Value: $value<br />\n";
}

foreach ($arr as $key => $value) {
    echo "Key: $key; Value: $value<br />\n";
}
?>