<?php

namespace App\Acoplamento;

class Fatura
{
    private $valorMensal;

    /**
     * Fatura constructor.
     * @param null $valorMensal
     */
    public function __construct($valorMensal = null)
    {
        $this->valorMensal = $valorMensal;
    }

    /**
     * @return float
     */
    public function getValorMensal() : float
    {
        return $this->valorMensal;
    }
}
