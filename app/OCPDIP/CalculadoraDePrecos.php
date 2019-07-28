<?php

namespace App\OCPDIP;

class CalculadoraDePrecos
{
    private $tabelaDePreco;
    private $entrega;

    /**
     * CalculadoraDePrecos constructor.
     * @param TabelaDePreco $tabelaDePreco
     * @param Entrega $entrega
     */
    public function __construct(TabelaDePreco $tabelaDePreco, Entrega $entrega)
    {
        $this->tabelaDePreco = $tabelaDePreco;
        $this->entrega = $entrega;
    }

    /**
     * @param Compra $produto
     * @return float|int
     */
    public function calcula(Compra $produto)
    {
        $desconto = $this->tabelaDePreco->descontoPara($produto->getValor());
        $frete = $this->entrega->para($produto->getCidade());

        return $produto->getValor() * (1 - $desconto) + $frete;
    }
}
