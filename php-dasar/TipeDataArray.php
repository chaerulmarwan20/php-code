<?php

$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["Chaerul", "Marwan", "Sayedeh"];
var_dump($names);

var_dump($names[0]);

$names[0] = "Budi";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Joko";
var_dump($names);

var_dump(count($names));

$chaerul = array(
    "id" => "chaerul",
    "name" => "Chaerul",
    "age" => 20,
    "address" => array(
        "city" => "Sumedang",
        "country" => "Indonesia",
    ),
);

var_dump($chaerul);

var_dump($chaerul["name"]);
var_dump($chaerul["address"]["country"]);

$marwan = [
    "id" => "marwan",
    "name" => "Marwan",
    "age" => 20,
    "address" => array(
        "city" => "Bandung",
        "country" => "Indonesia",
    ),
];

var_dump($marwan);
