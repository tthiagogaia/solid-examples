<?php

namespace App\SingleResponsibilityPrinciple;

class Cargo
{
    private $regra;

    /**
     * Cargo constructor.
     * @param RegraDeCalculo $regra
     */
    public function __construct(RegraDeCalculo $regra)
    {
        $this->regra = $regra;
    }

    /**
     * @return RegraDeCalculo
     */
    public function getRegra()
    {
        return $this->regra;
    }
}
