<?php

function counter(int $number){

    for ($i=2; $i <= $number; $i += 2) { 
        echo $i;
        echo "\r\n";
    }
    
}

echo counter(20);


?>