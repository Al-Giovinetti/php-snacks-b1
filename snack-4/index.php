<?php
/*Scrivi una funzione che accetti tre argomenti:
un array e due numeri ("a" più piccolo di "b" e "b" grande al massimo quanto il numero di elementi dell'array).

La funzione ritornerà un nuovo array con i valori che hanno la posizione compresa 
tra "a" e "b"*/

function differenceArray($array,$min,$max){
    $differnce = $max - $min;
    for($i = $min; i < $diffrence; i++){
        array_push($array,$i)
    }
    return $array
}

$newArrey = differenceArray($newArrey,10,18)
var_dump($newArrey)
?>