<?php

namespace App\LSP;

class ContaComum
{
    private $manipulador;

    /**
     * ContaComum constructor.
     */
    public function __construct()
    {
        $this->manipulador = new ManipuladorDeSaldo();
    }

    /**
     * @param float $valor
     * @throws \Exception
     */
    public function saca(float $valor)
    {
        $this->manipulador->saca($valor);
    }

    /**
     * @param float $valor
     */
    public function deposita(float $valor)
    {
        $this->manipulador->deposita($valor);
    }

    /**
     * @return float
     */
    public function getSaldo(): float
    {
        return $this->manipulador->getSaldo();
    }

    public function rende(): void
    {
        $this->manipulador->rende(1.1);
    }
}
