<?php


echo "Hello World! You Mother Fucker";


header ('Content-disposition: attachment;
filename = download.jpg');
header('Content-type: picture/jpg');
readfile('download.jpg');
?>