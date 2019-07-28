<?php

namespace App\OCPDIP;

class Compra
{
    private $valor;
    private $cidade;

    /**
     * Compra constructor.
     * @param float $valor
     * @param String $cidade
     */
    public function __construct(float $valor, String $cidade)
    {
        $this->valor = $valor;
        $this->cidade = $cidade;
    }

    /**
     * @return float
     */
    public function getValor(): float
    {
        return $this->valor;
    }

    /**
     * @return String
     */
    public function getCidade(): String
    {
        return $this->cidade;
    }


}
