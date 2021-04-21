<?php
require_once "vendor/autoload.php";

use Pattern\Frances;
use Pattern\Baguete;
use Pattern\Salame;
use Pattern\Calabresa;
use Pattern\QueijoParmesao;


$frances = new Calabresa(
    new Salame(
        new QueijoParmesao(new Frances)
    )
);
echo $frances->getNome() . ' = R$ ' . $frances->valor();

echo "\n";

$baguete = new Salame(
    new Calabresa(new Baguete())
);
echo $baguete->getNome() . ' = R$ ' . $baguete->valor();

echo "\n";