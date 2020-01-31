<?php
header("Content-Type: image/png");
$im = @imagecreate(200, 200)
    or die("Cannot Initialize new GD image stream");
$background_color = imagecolorallocate($im, 255, 255, 0); // yellow

$blueColor = imagecolorallocate($im, 0, 0, 255); // color variable BLUE

$text_color = imagecolorallocate($im, 0, 14, 91); // red

imagestring($im, 100, 5, 5, "String Message", $text_color); // text message
imageline($im, 0, 0, 200, 200, $blueColor); // line
imagefilledrectangle($im, 0, 70, 50, 120,$blueColor); // rectangle
imagefilledellipse($im, 120, 120, 50, 100, $text_color); // cirlce
imagepng($im);
imagedestroy($im);
?>