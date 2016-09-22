<?php
/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 2016/3/17
 * Time: 22:37
 */

/**
 * sort() - 以升序对数组排序
 * rsort() - 以降序对数组排序
 * asort() - 根据值，以升序对关联数组进行排序
 * ksort() - 根据键，以升序对关联数组进行排序
 * arsort() - 根据值，以降序对关联数组进行排序
 * krsort() - 根据键，以降序对关联数组进行排序
 */

$cars=array("Volvo","BMW","SAAB");
$numbers=array(3,5,1,22,11);
$age=array("Bill"=>"35","Steve"=>"37","Peter"=>"43");
sort($cars);
echo "sort():","<br>";
$clength=count($cars);
for($x=0;$x<$clength;$x++)
{
    echo $cars[$x];
    echo "<br>";
}
echo "<hr>";

sort($numbers);
echo "sort():","<br>";
$arrlength=count($numbers);
for($x=0;$x<$arrlength;$x++)
{
    echo $numbers[$x];
    echo "<br>";
}
echo "<hr>";

rsort($cars);
echo "rsort():","<br>";
$clength=count($cars);
for($x=0;$x<$clength;$x++)
{
    echo $cars[$x];
    echo "<br>";
}
echo "<hr>";

rsort($numbers);
echo "rsort():","<br>";
for($x=0;$x<$arrlength;$x++)
{
    echo $numbers[$x];
    echo "<br>";
}
echo "<hr>";

asort($age);
echo "asort():","<br>";
foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
echo "<hr>";

ksort($age);
echo "ksort():","<br>";
foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
echo "<hr>";

arsort($age);
echo "arsort():","<br>";
foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
echo "<hr>";

krsort($age);
echo "krsort():","<br>";
foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
echo "<hr>";

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo $_SERVER['REQUEST_METHOD'];


