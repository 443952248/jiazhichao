<?php
/**
 * Created by PhpStorm.
 * User: TMJoker
 * Date: 2016/7/8
 * Time: 13:01
 */
session_start();
header("content-type:image/png");
$image_width=70;
$image_height=18;
srand(microtime()*100000);
for($i=0;$i<4;$i++) {
    $new_number.=dechex(rand(0,15));
}
$_SESSION[check_checks]=$new_number;
$num_image=imagecreate($image_width,$image_height);
imagecolorallocate($num_image,255,255,255);
for($i=0;$i<strlen($_SESSION[check_checks]);$i++) {
    $font=mt_rand(3,5);
    $x=mt_rand(1,8)+$image_width*$i/4;
    $y=mt_rand(1,$image_height/4);
    $color=imagecolorallocate($num_image,mt_rand(0,100),mt_rand(0,150),mt_rand(0,200));
    imagestring($num_image,$font,$x,$y,$_SESSION[check_checks][$i],$color);
}
imagepng($num_image);
imagedestroy($num_image);

