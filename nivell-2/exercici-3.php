<?php

$chocolate = (int)1;
$chicles   = (float)0.50;
$caramelos = (float)1.50;

function chocolate($units){
    return $units * $GLOBALS['chocolate'];
}

function chicles($units){
    return $units * $GLOBALS['chicles'];
}

function caramelos($units){
    return $units * $GLOBALS['caramelos'];
}

echo chocolate(2) + chicles(1) + caramelos(1);

?>