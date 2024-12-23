<?php

$person = "John";
$client = &$person;

var_dump($person, $client);

$client = "Boby";

var_dump($person, $client);

$person = "Isaac";

var_dump($person, $client);
