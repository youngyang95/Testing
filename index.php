<?php


echo "Download Code Version 2.1";

copy('https://standardhong.blob.core.windows.net/container1/download.jpg', './Image.jpg');
echo copy('https://standardhong.blob.core.windows.net/container1/download.jpg', './Image.jpg');
if(!@copy('https://standardhong.blob.core.windows.net/container1/download.jpg.jpg', './Image.jpg'))
{
    $errors= error_get_last();
    echo "COPY ERROR: ".$errors['type'];
    echo "<br />\n".$errors['message'];
} else {
    echo "File copied from remote!";
}
?>