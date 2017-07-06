<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "Download Code Version 1.6";

copy('https://drive.google.com/file/d/0BzYOCiHocV0fMENJNERvbnQzRkk/view?usp=sharing', './Image.jpg');

if(!@copy('https://drive.google.com/file/d/0BzYOCiHocV0fMENJNERvbnQzRkk/view?usp=sharing', './Image.jpg'))
{
    $errors= error_get_last();
    echo "COPY ERROR: ".$errors['type'];
    echo "<br />\n".$errors['message'];
} else {
    echo "File copied from remote!";
}

?>