<?php
/**
 * Created by PhpStorm.
 * User: TMJoker
 * Date: 2016/4/26
 * Time: 16:57
 */

function maxnum($a, $b, $c)
{
    return $a > $b ? ($a > $c ? $a : $c) : ($b > $c ? $b : $c);
}

echo maxnum(23, 14, 53)."<br/>";

$num = 10;
function multiply($num)
{
    return $num = $num * 10;
}

echo multiply($num);
echo $num;