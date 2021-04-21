<?php

namespace Pattern;

use Pattern\Pao;

class Frances extends Pao
{
    public function __construct()
    {
        $this->nome = 'Francês';
    }

    public function valor()
    {
        return 2;
    }
}