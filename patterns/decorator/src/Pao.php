<?php

namespace Pattern;

abstract class Pao
{
    protected $nome;

    public function getNome()
    {
        return $this->nome;
    }

    abstract function valor();
}
