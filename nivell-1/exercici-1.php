<?php

function moduler(int $number){
    return ($number % 2) ? "És imparell" : "És parell";
}

echo moduler(12);

?>