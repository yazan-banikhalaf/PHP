<?php

$greet = function ($name) {
    return "Hello, $name\n";
};

echo $greet('Yazan');

/************************************** */
$numbers = [1, 2, 3];

$squared = array_map(function ($n) {
    return $n*$n;
}, $numbers);

var_dump($numbers, $squared);
$sum = 0;
foreach($squared as $sqrt) {
    $sum += $sqrt;
}
echo "Sum : $sum\n";

/************************************** */
$message = "Bye";
$greet2 = function ($name) use($message) {
    return "$message, $name\n";
};

echo $greet2('Yazan');

/************************************** */
$message = "Bye";
$greet2 = function ($name) use(&$message) {
    $message = $message . "!";
    return "$message, $name\n";
};

echo $greet2('Yazan');
echo $message;
