<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Chaerul";
$student1->value = 100;
$student1->setSample("XXX");

$student1(1, "Chaerul", true, "Marwan");