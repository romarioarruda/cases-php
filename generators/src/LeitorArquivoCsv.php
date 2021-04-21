<?php

namespace App;

use App\ReadInterface;

class LeitorArquivoCsv implements ReadInterface
{
    private $arquivo;

    public function __construct(string $nomeArquivo)
    {
        $this->arquivo = fopen($nomeArquivo, 'r');
    }

    public function lerArquivoCompleto(): iterable
    {
        while (!feof($this->arquivo)) {
            yield fgetcsv($this->arquivo);
        }
    }

    public function __destruct()
    {
        fclose($this->arquivo);
    }
}
