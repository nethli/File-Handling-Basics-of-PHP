<?php
    $myfile = fopen("open.txt","r+") or die ("File does not exist");

    $pointer = fgets($myfile);
    echo $pointer;
    fclose($myfile);
?>