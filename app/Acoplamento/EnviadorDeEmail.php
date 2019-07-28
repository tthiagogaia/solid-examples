<?php

namespace App\Acoplamento;

class EnviadorDeEmail implements AcaoAposGerarNota
{
    /**
     * Simula o envio de e-mail
     *
     * @param NotaFiscal $nf
     */
    public function executaAcao(NotaFiscal $nf)
    {
        echo "Email enviado" . PHP_EOL;
    }
}
