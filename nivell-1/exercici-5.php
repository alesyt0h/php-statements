<?php

function getGrade(float|string $percent){
    
    $percent = floatval($percent) / 100;

    switch(true){
        case ($percent < 0.33):
            echo 'Reprova';
            break;
        case ($percent >= 0.33 && $percent <= 0.44):
            echo 'El grau es de Tercera Divisió';
            break;
        case ($percent >= 0.45 && $percent <= 0.59):
            echo 'El grau es de Segona Divisió';
            break;
        case ($percent >= 0.60):
            echo 'El grau es de Primera Divisió';
            break;
    }

}

getGrade(59);

?>