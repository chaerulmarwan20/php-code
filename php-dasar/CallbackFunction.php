<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Chaerul", "strtoupper");
sayHello("Chaerul", "strtolower");
sayHello("Chaerul", function (string $name): string {
    return strtoupper($name);
});
sayHello("Chaerul", fn($name) => strtoupper($name));
