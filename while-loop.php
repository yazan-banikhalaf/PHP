<?php 

$secret = "secret";
$attempts = 0;
$maxAttempts = 5;

while($maxAttempts > $attempts) {
    $guess = trim(fgets(STDIN));
    $attempts ++;

    if($guess == $secret) {
        echo "Congrats!, You have unlocked the treasure";
        break;
    } else if($attempts == $maxAttempts) {
        echo "Wrong, You don't have any attempts left";
    } else {
        $remains = $maxAttempts - $attempts;
        echo "Not yet, attempts remain = $remains";
    }
}