<?php
/**
 * Created by PhpStorm.
 * User: TMJoker
 * Date: 2016/6/23
 * Time: 20:25
 */
$str = 'This is an example!';
$preg = '/\b\w{2}\b/';
$num1 = preg_match($preg,$str,$str1);
echo $num1.'<br>';
var_dump($str1);



$num2 = preg_match_all($preg,$str,$str2);
echo '<p>'.$num2.'<br>';
var_dump($str2);