<?php

function doubleValue(int &$number):int {
    $number *= 2;
    return $number;
}
$original = 5;

var_dump (doubleValue($original), $original);
