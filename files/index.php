<?php
$image = imagecreate(300, 100);

$whitecolor = imagecolorallocate($image, 25, 233, 12);

$blackcolor = imagecolorallocate($image, 0, 0, 0);

imagestring($image, 5, 15, 30, 'Copyrights Programmerblog.net', $blackcolor);

header("Content-type: image/png");

imagepng($image);

imagedestroy($image);


/*$image = imagecreatefromjpeg('default.jpg');

// First we create our stamp image manually from GD
$stamp = imagecreatetruecolor(200, 70);

imagefilledrectangle($stamp, 0, 0, 199, 169, 0x0000FF);

imagefilledrectangle($stamp, 9, 9, 190, 60, 0xFFFFFF);

imagestring($stamp, 5, 20, 20, 'Programmer Blog', 0x0000FF);

imagestring($stamp, 3, 20, 40, '(c) 2017', 0x0000FF);

// Set the margins for the stamp and get the height/width of the stamp image
$right = 10;

$bottom = 10;

$sx = imagesx($stamp);

$sy = imagesy($stamp);

// Merge the stamp onto our photo with an opacity of 50%
imagecopymerge($image, $stamp, imagesx($image) - $sx - $right, imagesy($image) - $sy - $bottom, 0, 0, imagesx($stamp), imagesy($stamp), 70);

// Save the image to file and free memory
imagepng($image, 'oumarsow.png');

imagedestroy($image);*/
?>