<?php


echo "Download Code Version 1.0";


file_put_contents("images.jpg",file_get_contents("https://raw.githubusercontent.com/youngyang95/Testing/master/download.jpg"));
?>