<?php
    $file = fopen("open.text","r");

    //Readinng 13 bytes from the file using fread() function
    //Read first 13 letters

    echo fread($file,"13");

    //Close file
    fclose($file);

?>