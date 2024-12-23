<?php

$basket = ['apple' => 3, 'banana' => 4];
$total = 0;

foreach($basket as $index => $item) {
    echo $index . " : " . $item ."\n";
    $total += $item;

}
echo "Total = " . $total;