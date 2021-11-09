<?php

function counter(int $number = 10){

    for ($i=2; $i <= $number; $i += 2) { 
        echo $i;
        echo "\r\n";
    }
    
}

echo counter();


?>