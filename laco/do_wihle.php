<?php
    $i = 1;

    do{
        echo("<br>" .$i);
        
        if ($i < 18) {
            echo " = Menor de idade";
        } else {
            echo " = Maior de idade" ;
        }
        $i++;
    }
    while($i < 22);