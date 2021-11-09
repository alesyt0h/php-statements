<?php

// Se puede conseguir en un solo loop?? Ya me dirás!
function criba(int $end, int $start = 2){

    $primes = range($start, $end);

    while ($start * $start < $end) {
        
        foreach ($primes as $key => $value) {
            if ($value % $start === 0 && $value !== $start){
                unset($primes[$key]);
            }
        }

        $primes = array_values($primes);
        $primeKey = array_search($start, $primes);
        $start = $primes[$primeKey + 1];
        
    }
    
    // Imprime todos los primos hasta el número proporcionado
    print_r($primes);

    // Imprime si el número ingresado es primo o no
    echo (array_search($end, $primes)) ? "Es primo!" : "No es primo";
}

criba(120);

?>