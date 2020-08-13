<?php
session_start();
header('Content-type: image/jpeg');

$text = $_SESSION['secure'];

$font_size = 30;

$image_width = 400;
$image_height = 40;

$image = imagecreate($image_width, $image_height);
imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 0, 0);

imagettftext($image, $font_size, 0, 15, 30, $text_color, 'D:\xampp\php\extras\fonts\ttf\OpenSans-Italic.ttf', $text);
//imagettftext($image, $font_size, 0, 14, 29, $text_color, 'font.ttf', $text);
imagejpeg($image);


?>