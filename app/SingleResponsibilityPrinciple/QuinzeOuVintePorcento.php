<?php

namespace app\SingleResponsibilityPrinciple;

class QuinzeOuVintePorcento implements RegraDeCalculo
{
    /**
     * @param Funcionario $funcionario
     * @return float
     */
    public function calcula(Funcionario $funcionario): float
    {
        if ($funcionario->getSalario() > 2000) {
            return $funcionario->getSalario() * 0.75;
        }

        return $funcionario->getSalario() * 0.85;

    }
}
