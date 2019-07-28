<?php

namespace App\OCPDIP;

class TabelaDePrecoPadrao implements TabelaDePreco
{
    /**
     * @param float $valor
     * @return float|int
     */
    public function descontoPara(float $valor)
    {
        if ($valor > 5000) {
            return 0.03;
        }
        if ($valor > 1000) {
            return 0.05;
        }

        return 0;
    }
}
