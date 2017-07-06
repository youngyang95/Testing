<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "Download Code Version 1.7";
header('Content-Type: image/jpg ');
header('Content-Disposition: attachment; filename= "Image.jpg"');
copy('http://drive.google.com/file/d/0BzYOCiHocV0fMENJNERvbnQzRkk/view?usp=sharing', './Image.jpg');

?>