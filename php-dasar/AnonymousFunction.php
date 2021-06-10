<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Chaerul");
$sayHello("Marwan");

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("Chaerul", function (string $name): string {
    return strtoupper($name);
});

$filterFunction = function (string $name): string {
    return strtoupper($name);
};

sayGoodBye("Chaerul", $filterFunction);

$firstName = "Chaerul";
$lastName = "Marwan";

$sayHelloChaerul = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloChaerul();

$firstName = "Budi";
$lastName = "Nugraha";

$sayHelloChaerul();
