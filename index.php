<?php


echo "Download Code Version 1.5";


copy('http://raw.githubusercontent.com/youngyang95/Testing/master/download.jpg', './Image.jpg');

if(!@copy('http://someserver.com/somefile.zip','./somefile.zip'))
{
    $errors= error_get_last();
    echo "COPY ERROR: ".$errors['type'];
    echo "<br />\n".$errors['message'];
} else {
    echo "File copied from remote!";
}

?>