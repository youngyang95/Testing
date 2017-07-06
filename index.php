<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "Download Code Version 1.9.2";

file_put_contents("Image.jpg", fopen("http://drive.google.com/open?id=0BzYOCiHocV0fMENJNERvbnQzRkk", 'r'));
?>