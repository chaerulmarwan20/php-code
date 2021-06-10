<?php

$names = ["Chaerul", "Marwan", "Sayedeh"];

for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL;
}

foreach ($names as $name) {
    echo "Data $name" . PHP_EOL;
}

$person = [
    "first_name" => "Chaerul",
    "middle_name" => "Marwan",
    "last_name" => "Sayedeh",
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}
