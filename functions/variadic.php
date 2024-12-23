<?php

function variadic(...$numbers)
{
    $sum = 0;
    var_dump($numbers);
    foreach($numbers as $number) {
        $sum += $number;
    }
    return $sum;
} 
var_dump( variadic(1,2,3,4,3,2,1,2,3,4,));