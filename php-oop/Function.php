<?php

require_once "data/Person.php";

$chaerul = new Person("Chaerul", "Sumedang");
$chaerul->name = "Chaerul";
$chaerul->sayHello("Marwan");

$joko = new Person("Joko", "Cirebon");
$joko->name = "Joko";
$joko->sayHello(null);

$chaerul->info();
$joko->info();