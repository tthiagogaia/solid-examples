<?php

namespace App\Acoplamento;

class GeradorNotaFiscal
{
    private $acoesAposGerarNota;

    /**
     * GeradorNotaFiscal constructor.
     */
    public function __construct()
    {
        $this->acoesAposGerarNota = [];
    }

    /**
     * @param AcaoAposGerarNota $acao
     */
    public function addAcaoAposGerarNota(AcaoAposGerarNota $acao)
    {
        $this->acoesAposGerarNota[] = $acao;
    }

    /**
     * @param Fatura $fatura
     */
    public function gera(Fatura $fatura)
    {
        $valor = $fatura->getValorMensal();

        $nf = new NotaFiscal($valor, $this->impostoSobreValor($valor));

        foreach ($this->acoesAposGerarNota as $acao) {
            $acao->executaAcao($nf);
        }
    }

    /**
     * Simula o cálculo de um imposto
     *
     * @param $valor
     * @return float
     */
    private function impostoSobreValor($valor): float
    {
        return $valor * 0.06;
    }
}
