<?php

namespace App\LSP;

class ManipuladorDeSaldo
{
    private $saldo;

    /**
     * @param $valor
     * @throws \Exception
     */
    public function saca($valor): void
    {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            return;
        }

        throw new \Exception("Valor inválido para o saque");
    }

    /**
     * @param float $valor
     */
    public function deposita(float $valor)
    {
        $this->saldo += $valor;
    }

    /**
     * @return float
     */
    public function getSaldo(): float
    {
        return $this->saldo;
    }

    /**
     * @param float $taxa
     */
    public function rende(float $taxa)
    {
        $this->saldo *= $taxa;
    }
}
