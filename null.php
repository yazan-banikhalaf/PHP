<?php
declare(strict_types=1);

$abc = null;
$db = $abc ?? "default";
var_dump(
    null == null,
    null == false,
            null == 0,
            null == '',
            null == [],
            $abc,
            isset($abc),
            is_null($abc),
            $db,
);

function greet(?string $name)
{
    echo "Hello, " .($name ?? 'Stranger'). "!\n";
}
greet('John');
greet(null);

// function greet($name = 'Stranger')
// {
//     echo "Hello, $name!\n";
// }
// greet('John');
// greet();

var_dump(
    array_filter([1, 0, 2, false, 3, null, 4, '']),
);