<?php
    $myfile = fopen("xyz.txt","w+");
    
    fwrite($myfile, "Advanced Web Technologies With Dino");
    rewind($myfile);

    fwrite($myfile, "Web Technologies");
    /*Rewind the postion of the file pointer to the beginning of the file*/ 
    rewind($myfile);

    echo fread($myfile, filesize("xyz.txt"));
    fclose($myfile);
?>