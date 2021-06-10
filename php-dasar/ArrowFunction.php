<?php

$firstName = "Chaerul";
$lastName = "Marwan";

$arrowFunction = fn() => "Hello $firstName $lastName" . PHP_EOL;

echo $arrowFunction();
