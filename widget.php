<?php
$im = imagecreatetruecolor(120, 20);
$text_color = imagecolorallocate($im, 233, 14, 91);

imagestring($im, 1, 5, 5,  'A Simple Text String', $text_color);

header('Content-Type: image/jpeg');

imagejpeg($im);

imagedestroy($im);
?>