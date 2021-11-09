<?php

function calculateCalls(int $minutes){

    if($minutes < 3){
        echo "Total a pagar: 10 cèntims";
    } else {
        echo "Total a pagar: " . ($minutes - 3) * 5 + 10 . " céntims";
    }

}

calculateCalls(15);

?>