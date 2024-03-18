<?php
    echo "laço de repetição while";

    $i = 1;

    while ($i < 22) {
        echo "<br>". $i;
        $i++;
        //if
        if ($i < 18) {
            echo " = Menor de idade";
        } else {
            echo " = Maior de idade" ;
    }
}