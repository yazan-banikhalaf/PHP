<?php

$simpleArray[] = 6;
// echo $simpleArray[0];

$alpha = ['b' , 'c' , 'a'];
// var_dump(count($alpha));
// sort($alpha);
// var_dump($alpha);
// rsort($alpha);
// var_dump($alpha);

$associativeArray = [
    'id' => 1,
    'name' => 'yazan',
    'age' => 24  
];
$associativeArray['country'] = 'Jordan';
$associativeArray['last_name'] = 'Ahmad';
// var_dump($associativeArray);
// asort($associativeArray);
// var_dump($associativeArray);
// ksort($associativeArray);
// var_dump($associativeArray);

$multidimensionalArray = [
    ['1', '2', '3',],
    ['4', '5', '6',]
];
// echo $multidimensionalArray[1][1];

$multidimensionalAssociativeArray = [
    [    
        'id' => 1,
        'name' => 'yazan',
        'age' => 24
    ],
    [
        'id' => 2,
        'name' => 'mohammad',
        'age' => 9
    ],
];
// echo json_encode($multidimensionalAssociativeArray, JSON_PRETTY_PRINT);
// foreach ($multidimensionalAssociativeArray as $index => $a) {
//     echo $index . ': '. $a ."\n"; 
// }

$numbers = range(1,5);
echo json_encode($numbers, JSON_PRETTY_PRINT);