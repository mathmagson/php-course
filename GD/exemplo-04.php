<?php 

header("Content-type: image/jpeg");

$file = "wallpaper.jpg";

$new_width = 256;
$new_heigh = 256;

//var_dump(getimagesize($file));

list($old_width, $old_heigh) = getimagesize($file);

$new_image = imagecreatetruecolor($new_width, $new_heigh);
$old_image = imagecreatefromjpeg($file);

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_heigh, $old_width, $old_heigh);

imagejpeg($new_image);

imagedestroy($old_image);
imagedestroy($new_image);

 ?>