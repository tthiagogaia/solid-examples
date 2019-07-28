<?php

namespace App\OCPDIP;

class Correios implements Entrega
{
    /**
     * @param String $cidade
     * @return int
     */
    public function para(String $cidade)
    {
        if (strtoupper($cidade) == "SAO PAULO") {
            return 15;
        }

        return 30;
    }
}
