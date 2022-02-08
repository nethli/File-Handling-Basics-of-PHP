<?php
    $myfile   = fopen('open.txt','rb');
    $contents = fread($myfile, filesize('open.txt'));
    fclose($myfile);
    print $contents;

?>