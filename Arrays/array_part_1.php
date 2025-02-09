<?php

$simpleArray[] = 6;
// echo $simpleArray[0];

$alpha = ['a' , 'b' , 'c'];
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
// rsort($associativeArray);
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
// echo json_encode($numbers, JSON_PRETTY_PRINT);

$squared = array_map(fn($n) => $n ** 2, $numbers);
$sum = array_sum($numbers);
$reversed = array_reverse($numbers);
// var_dump($reversed);
// echo json_encode($reversed, JSON_PRETTY_PRINT);

$sum = 0;
for ($i = 0; $i < count($squared); $i++) {
    $sum += $squared[$i];
};
// echo $sum;

$moreNumbers = [0, ...$numbers, 6];
// echo json_encode($moreNumbers, JSON_PRETTY_PRINT);

[$first, ,$third] = $alpha;
// var_dump($first, $third);

for($i = count($numbers) - 1; $i >= 0; $i--) {
    $reversed = $numbers[$i] . ' ';
    // echo $reversed;
} 
// var_dump( array_reverse($numbers));