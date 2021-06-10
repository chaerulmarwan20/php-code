<?php

$dateTime = new DateTime();
$dateTime->setDate(2000, 6, 20);
// Hours, Minutes, Seconds, Micro Seconds -> default-nya 0
$dateTime->setTime(11, 11, 11, 0);

$dateTime->add(new DateInterval("P1Y"));

$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true; // mengurangi 1 bulan, tadinya bulan 6 (yang ada di atas), jadi 5 karena dikurang 1
$dateTime->add($minusOneMonth);

var_dump($dateTime);

$now = new DateTime();
var_dump($now);
$now->setTimezone(new DateTimeZone("America/Toronto"));
var_dump($now);

$string = $now->format("Y-m-d H:i:s");
echo "Waktu Saat Ini : $string" . PHP_EOL;

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-10 10:10:10", new DateTimeZone("Asia/Jakarta"));
if ($date) {
  var_dump($date);
} else {
  echo "Format Salah" . PHP_EOL;
}