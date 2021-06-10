<?php

$first = [
    "first_name" => "Chaerul",
];

$last = [
    "last_name" => "Marwan",
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Chaerul",
    "last_name" => "Marwan",
];

$b = [
    "last_name" => "Marwan",
    "first_name" => "Chaerul",
];

var_dump($a == $b);
var_dump($a === $b);
