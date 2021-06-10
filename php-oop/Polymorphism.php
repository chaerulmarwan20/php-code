<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Chaerul");
var_dump($company);

$company->programmer = new BackendProgrammer("Marwan");
var_dump($company);

$company->programmer = new FrontendProgrammer("Sayedeh");
var_dump($company);

sayHelloProgrammer(new Programmer("Chaerul"));
sayHelloProgrammer(new BackendProgrammer("Marwan"));
sayHelloProgrammer(new FrontendProgrammer("Sayedeh"));