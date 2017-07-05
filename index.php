<?php


echo "Hello World! You Mother Fucker keke";


$imagecontent = DownloadImageFromUrl("https://raw.githubusercontent.com/youngyang95/Testing/master/download.jpg");
$savefile = fopen('myimage.jpg', 'w');
fread($savefile, $imagecontent);
fclose($savefile);

?>