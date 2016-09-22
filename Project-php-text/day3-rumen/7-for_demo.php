<?php
/**
 * Created by PhpStorm.
 * User: TMJoker
 * Date: 2016/4/22
 * Time: 11:25
 */
//输出9行
for($i=1;$i<= 9;$i++) {
    echo "$i<br/>";
}
echo "<br/>";
//第i行有i个*
for($i=1;$i<=9;$i++) {
    for($k=1;$k<=$i;$k++) {
        echo "*";
    }
    echo "<br />";
}
echo "<br/>";

//输出一个99乘法表
echo "<pre>";
for($i=1;$i<=9;$i++) {
    for($k=1;$k<=$i;$k++) {
        echo "$i x $k = ". $i*$k ."\t";
    }
    echo "<br />";
}
echo "</pre>";

