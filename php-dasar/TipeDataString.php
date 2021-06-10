<?php

echo 'Name : ';
echo 'Chaerul Marwan';
echo "\n";

echo "Name : ";
echo "Chaerul\t Marwan\n";

echo <<<CHAERUL
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc

CHAERUL;

echo <<<'CHAERUL'
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc
CHAERUL;
