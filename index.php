<?php


echo "Download Code Version 1.5.1";

copy('http://raw.githubusercontent.com/youngyang95/Testing/master/download.jpg', './Image.jpg');
echo copy('http://raw.githubusercontent.com/youngyang95/Testing/master/download.jpg', './Image.jpg');
if(!@copy('http://raw.githubusercontent.com/youngyang95/Testing/master/download.jpg', './Image.jpg'))
{
    $errors= error_get_last();
    echo "COPY ERROR: ".$errors['type'];
    echo "<br />\n".$errors['message'];
} else {
    echo "File copied from remote!";
}
?>