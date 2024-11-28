<?php

$username = "adminn";
$password = "passwordd";

if ($username == "admin" && $password == "password") {
    echo "Success";
} else if($username == "admin" || $password == "password") {
    echo "Wrong user name or password";
} else {
    echo "User not found";
}