<?php

function isBitten(){
    $randomPercent = rand(1, 100);

    return ($randomPercent > 50) ? true : false;
}

var_dump(isBitten());

?>