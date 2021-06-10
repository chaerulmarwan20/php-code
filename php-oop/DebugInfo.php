<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Chaerul";
$student1->value = 100;
$student1->setSample("SAMPLE");

// var_dump($student1); // untuk php 7
print_r($student1); // untuk php 8