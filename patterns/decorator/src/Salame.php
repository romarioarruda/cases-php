<?php

namespace Pattern;

use Pattern\RecheioDecorator;

class Salame extends RecheioDecorator
{
    private $pao;

    public function __construct(Pao $pao)
    {
        $this->pao = $pao;
    }

    public function getNome()
    {
        return $this->pao->getNome() . ', Salame';
    }

    public function valor()
    {
        return 2 + $this->pao->valor();
    }
}