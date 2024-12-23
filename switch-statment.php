<?php


$size = "M";

switch($size) {
    case "S":
    case "M":
        echo "The size is meduim or large \n";
        break;
    case "L":
    case "XL":
        echo "The size is large or Xlarge";
        default:
        echo "Unknown";
}