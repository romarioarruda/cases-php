<?php

use App\LeitorArquivoCsv;

require_once "vendor/autoload.php";

$leitor = new LeitorArquivoCsv('linhas.csv');
$conteudo = $leitor->lerArquivoCompleto();

foreach ($conteudo as $linha) {
    printf('%s tem %d anos%s', $linha[0], $linha[1], PHP_EOL);
}