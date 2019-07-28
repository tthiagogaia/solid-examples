<?php

namespace App\LSP;

class ContaEstudante extends ContaComum
{
    private $milhas;
    private $manipulador;

    /**
     * ContaEstudante constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->manipulador = new ManipuladorDeSaldo();
    }

    /**
     * @param float $valor
     */
    public function deposita(float $valor)
    {
        $this->manipulador->deposita($valor);
        $this->milhas += $valor;
    }

    /**
     * @return int
     */
    public function getMilhas(): int
    {
        return $this->milhas;
    }
}
