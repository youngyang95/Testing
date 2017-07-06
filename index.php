<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "Download Code Version 1.9.4";
header('Location: http://drive.google.com/open?id=0BzYOCiHocV0fMENJNERvbnQzRkk');
header('Content-Type: image/jpg');
header('Content-Disposition: attachment; filename= "Image.jpg"');

?>