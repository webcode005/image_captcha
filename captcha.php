<?php
// Set the content-type
header('Content-Type: image/png');
session_start();

// Generate a random number
// from 1000-9999
 $captcha = rand(1000, 9999); 

// The captcha will be stored
// for the session
$_SESSION["captcha"] = $captcha;
// Create the image
$img = imagecreatetruecolor(100, 40);

// Create some colors
$lightsky = imagecolorallocate($img, 135, 206, 250);
$blue = imagecolorallocate($img, 25, 25, 112);
imagefilledrectangle($img, 0, 0, 219, 49, $lightsky);

// The text to draw

$text=$captcha;

imagestring( $img, 5, 34, 12, $text, $blue ); 


imagesetthickness( $img, 10 ); 

// Using imagepng() results in clearer text compared with imagejpeg() 
imagepng($img);
imagedestroy($img); 




?> 
