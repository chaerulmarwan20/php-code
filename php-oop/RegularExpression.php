<?php

$matches = [];
// $result = (bool) preg_match_all("/rul|wan|deh/i", "Chaerul Marwan Sayedeh", $matches);
$result = preg_match_all("/rul|wan|deh/i", "Chaerul Marwan Sayedeh", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu ANJING dan BANGSAT!");

var_dump($result);

$result = preg_split("/[\s,-]/", "Chaerul Marwan Sayedeh,Programmer,Zaman-Now");

var_dump($result);