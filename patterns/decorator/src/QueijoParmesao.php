<?php

namespace Pattern;

use Pattern\RecheioDecorator;

class QueijoParmesao extends RecheioDecorator
{
    private $pao;

    public function __construct(Pao $pao)
    {
        $this->pao = $pao;
    }

    public function getNome()
    {
        return $this->pao->getNome() . ', Queijo parmesão';
    }

    public function valor()
    {
        return 1.5 + $this->pao->valor();
    }
}