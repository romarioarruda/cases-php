<?php

namespace Pattern;

use Pattern\Pao;

class Baguete extends Pao
{
    public function __construct()
    {
        $this->nome = 'Baguete';
    }

    public function valor()
    {
        return 4;
    }
}