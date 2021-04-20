<?php

$arquivo = fopen('linhas.csv', 'w');

for ($i = 1; $i <= 10000000; $i++) {
    $nome = "Nome $i";
    $idade = rand(18, 30);

    fputcsv($arquivo, [$nome, $idade]);
}

fclose($arquivo);