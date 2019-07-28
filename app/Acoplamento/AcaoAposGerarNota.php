<?php

namespace App\Acoplamento;

interface AcaoAposGerarNota
{
    public function executaAcao(NotaFiscal $nf);
}
