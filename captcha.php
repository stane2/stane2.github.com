<?php
//包含生成给定长度字符串的自定义函数functions.php
include 'functions.php';
//创建65*20px大小的图像
$width = 65;
$height = 30;
$image = imagecreate($width, $height);
//为一幅图像分配颜色:imagecolorallocate
$bg_color = imagecolorallocate($image, 36, 96,48);

//取得随机字符串
$text = random_text(5);
//定义字体，位置
$font = 5;
$x = imagesx($image) / 2 - strlen($text) * imagefontwidth($font) / 2;
$y = imagesy($image) / 2 - imagefontheight($font) / 2;
//输出字符到图形上
$fg_color = imagecolorallocate($image, 0xff, 0xff, 0xff);
imagestring($image, $font, $x, $y, $text, $fg_color);
//输出图像
header('Content-type:image/png'); //定义header,声明图片文件
imagepng($image);
imagedestroy($image);
?>
