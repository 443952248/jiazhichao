<!DOCTYPE html>
<html>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: TMJoker
 * Date: 2016/3/17
 * Time: 15:03
 */
class Car
{
    var $color;
    function Car($color="green") {
        $this->color = $color;
    }
    function what_color() {
        return $this->color;
    }
}

function print_vars($obj) {
    foreach (get_object_vars($obj) as $prop => $val) {
        echo "\t$prop = $val\n";
    }
}

// instantiate one object
$herbie = new Car("white");

// show herbie properties
echo "\herbie: Properties \n";
print_vars($herbie);
echo "<hr>";


//strlen() 函数返回字符串的长度，以字符计。
echo "strlen()","<br />";
echo strlen("Hello world!"),"<hr>";

//strpos() 函数用于检索字符串内指定的字符或文本。如果找到匹配，则会返回首个匹配的字符位置。如果未找到匹配，则将返回 FALSE。
echo "strpos()","<br />";
echo strpos("Hello world!","orld"),"<hr>";

//PHP常量,对名称大小写敏感
define("GREETING", "Welcome to W3School.com.cn!");
echo  "PHP常量,对名称大小写敏感:","<br/>" ,GREETING,"<br>";


//PHP常量,对名称大小写不敏感
define("GREETING","hello everybody i am a boy!",true);
echo "PHP常量,对名称大小写不敏感:","<br/>",greeting,"<hr>";



$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");
$z = $x + $y; // $x 与 $y 的联合
echo '$x-----';var_dump($x);echo "<br>";
echo '$y-----';var_dump($y);echo "<br>";
var_dump($z);echo "<br>";
echo "<br>",'$x == $y ----->';
var_dump($x == $y);
echo "<br>",'$x === $y----->';
var_dump($x === $y);
echo "<br>",'$x != $y ----->';
var_dump($x != $y);
echo "<br>",'$x <> $y ----->';
var_dump($x <> $y);
echo "<br>",'$x !== $y ----->';
var_dump($x !== $y);
echo "<hr>";

$t=date("H");

if ($t<"20") {
    echo "Have a good day!";
}

echo "<hr>";

function cal($num1, $num2){
    $num=$num1+$num2;
    return $num;
}
echo cal(10,20),"<hr>";







?>

</body>
</html>