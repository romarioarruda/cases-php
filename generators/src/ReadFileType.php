<?php

namespace App;

class readFileType
{
    public function __construct(ReadInterface $read)
    {
        $conteudo = $read->lerArquivoCompleto();
        foreach ($conteudo as $linha) {
            printf('%s tem %d anos%s', $linha[0], $linha[1], PHP_EOL);
        }
    }
}