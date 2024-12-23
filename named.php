<?php

function greet(string $name, string $greet = "How are you?", bool $loud = false )
{
    $message = "Hello ". $name. "!, ". $greet;
    return $loud ? strtoupper($message) : $message;
}

echo greet("John") . "\n";                    
echo greet("John", "What you up to?") . "\n";
echo greet("John", "What you up to?", true) . "\n";
echo greet(name: "John", loud: false);
