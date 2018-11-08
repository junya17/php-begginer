<?php

    $file = "sample.txt";

    if( $handle = fopen($file, 'r')) {

        echo $content = fread($handle, filesize($file)); //Each bite equals a character

        fclose($handle);

    }else{

        echo "The files coult not be write on the file";

    }

   


?>