<?php
    $myfile = fopen("order/detect.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("order/detect.txt"));
    fclose($myfile);
?> 
