<?php

function greet($name)
{
    return "Hello, ".ucfirst(strtolower($name))."!\n";
}
echo greet('yaZaN');

function greetWithTime($name,  $a7a, $day = "day")
{
    return "$a7a, Good $day, $name\n";
} 
echo greetWithTime('Yazan', 'A7a', 'evening');
echo greetWithTime('Yazan', 'A7a');