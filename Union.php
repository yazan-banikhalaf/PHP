<?php

declare(strict_types=1);
function union($input)
{
    return match(true) {
        is_int($input) => "Integer: " . ($input*2),
        is_float($input) => "Float: " . round($input,2),
        is_string($input) => "String: " . strtoupper($input),
    };
}

$inputs = [22, 3.4496, "hello"];

foreach($inputs as $input) {
    echo union($input) . "\n";
}