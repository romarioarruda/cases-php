<?php

namespace App;

class LeitorArquivoCsv
{
    private $arquivo;


    public function __construct(string $nomeArquivo)
    {
        $this->arquivo = fopen($nomeArquivo, 'r');
    }


    public function lerArquivoCompleto(): iterable
    {
        while (!feof($this->arquivo)) {
            // $linhas[] = fgetcsv($this->arquivo);
            yield fgetcsv($this->arquivo);
        }

        // return $linhas ?? [];
    }


    public function __destruct()
    {
        fclose($this->arquivo);
    }
}