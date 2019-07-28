<?php

namespace App\SingleResponsibilityPrinciple;

class CalculadoraDeSalario
{
    /**
     * @param Funcionario $funcionario
     * @return float
     */
    public function calcula(Funcionario $funcionario): float
    {
        return $funcionario->calculaSalario();
    }
}
