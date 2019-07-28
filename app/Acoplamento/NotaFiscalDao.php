<?php

namespace App\Acoplamento;

class NotaFiscalDao implements AcaoAposGerarNota
{
    /**
     * Simula o envio para o DAO
     *
     * @param NotaFiscal $nf
     */
    public function executaAcao(NotaFiscal $nf)
    {
        echo "Mandando para o dao" . PHP_EOL;
    }
}
