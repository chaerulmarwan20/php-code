<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Chaerul";
$student1->value = 100;

$student2 = new Student();
$student2->id = "1";
$student2->name = "Chaerul";
$student2->value = 100;

var_dump($student1 == $student2);
var_dump($student1 === $student2); // ini false karena student1 dan student2 berbeda, contohnya seperti tempat pemyimpanan di memorinya berada di lokasi yang berbeda
var_dump($student1 === $student1);