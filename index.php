<?php


echo "Hello World! You Mother Fucker";


$url = 'https://github.com/youngyang95/Testing/blob/master/download.jpg'
$img = 'apple.jpg';
file_put_contents($img, file_get_contents($url));
?>