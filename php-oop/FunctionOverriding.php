<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Chaerul";
$manager->sayHello("Marwan");

$vp = new VicePresident();
$vp->name = "Joko";
$vp->sayHello("Irawan");