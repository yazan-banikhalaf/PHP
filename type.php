<?php

$isStudent = 0;

var_dump($isStudent, true, $isStudent === true);


$scores = [85, (int)'90.5'];

$total = $scores[0] + $scores[1];

var_dump($scores, $total);

echo "The total is: $total \n";