<?php

namespace App\Acoplamento;

class NotaFiscal
{
    private $valorBruto;
    private $impostos;

    /**
     * NotaFiscal constructor.
     * @param $valorBruto
     * @param $impostos
     */
    public function __construct($valorBruto, $impostos)
    {
        $this->valorBruto = $valorBruto;
        $this->impostos = $impostos;
    }

    /**
     * @return float
     */
    public function getValorBruto(): float
    {
        return $this->getValorBruto();
    }

    /**
     * @param float $valorBruto
     */
    public function setValorBruto(float $valorBruto)
    {
        $this->valorBruto = $valorBruto;
    }

    /**
     * @return float
     */
    public function getImpostos(): float
    {
        return $this->impostos;
    }

    /**
     * @return float
     */
    public function getValorLiquido(): float
    {
        return $this->valorBruto - $this->impostos;
    }
}
