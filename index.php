<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "Download Code Version 1.9";
header('Content-Type: image/jpg');
header('Content-Disposition: attachment; filename= "Image.jpg"');
file_put_contents("Image.jpg", fopen("https://lh3.googleusercontent.com/VDb2ZriRXTVuzZqW4rBv56dP-zrBnvUHbAhK0PL_7cgRP09DmDtaV3UIj-p4ZjaqbfxF8y5W8ze6zWY=w1366-h662-rw", 'r'));
?>