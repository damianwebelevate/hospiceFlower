<?php
header("Content-Type: image/png");
//
$productId = $_GET['productId'];
$fName = $_GET['fName'];

 // extend to pass in a color

   // switch the productId and assign a color for the text
 $output = dirname(__FILE__).'/output/emailImage_'.$productId.'.png';
 $input = dirname(__FILE__).'/emailImages/'.$productId.'.png';
 $tempImg = imagecreatefrompng($input);
 $white = imagecolorallocate($tempImg, 255, 255, 255);
 $txt = "From ".$fName;
 $font = dirname(__FILE__).'/fonts/corbel_bold.ttf';
 imagettftext($tempImg, 72, 0, 50, 100, $white, $font, $txt);
 imagepng($tempImg, NULL, 9);
 imagedestroy($tempImg);


 ?>
