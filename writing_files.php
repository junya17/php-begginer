<?php

    $file = "sample.txt";

    if( $handle = fopen($file, 'w')) {

        fwrite($handle, 'I love PHP');

        fclose($handle);

    }else{

        echo "The files coult not be write on the file";

    }

   


?>