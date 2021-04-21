<?php

$file = fopen('linhas.csv', 'w');

$limit = 10000;

for ($i = 1; $i <= $limit; $i++) {
    $name = "Nome $i";
    $old = rand(18, 30);

    fputcsv($file, [$name, $old]);
}

fclose($file);