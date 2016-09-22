<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
header("content-type:image/jpeg");       //定义输出为图像类型
$im = imagecreate(200,60);                      //����һ������
$white = imagecolorallocate($im, 225,66,159);     //���û����ı�����ɫΪǳ��ɫ
imagejpeg($im);       //建立JPEG图形
imagedestroy($im);    //结束图形，释放内存空间                               //���ͼ��
?>

</body>
</html>