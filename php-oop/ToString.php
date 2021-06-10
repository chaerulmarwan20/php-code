<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Chaerul";
$student1->value = 100;
$student1->setSample("XXX");

$string = (string) $student1;
echo $string . PHP_EOL;

// bisa seperi ini juga, hasilnya sama saja seperti yang di atas
echo $student1 . PHP_EOL;