<?php

namespace App\SingleResponsibilityPrinciple;

class DezOuVintePorcento implements RegraDeCalculo
{
    /**
     * @param Funcionario $funcionario
     * @return float
     */
    public function calcula(Funcionario $funcionario): float
    {
        if ($funcionario->getSalario() > 3000) {
            return $funcionario->getSalario() * 0.8;
        }

        return $funcionario->getSalario() * 0.9;
    }
}
