<?php

include __DIR__ . '/vendor/autoload.php';

$fatura = new \App\Acoplamento\Fatura(1000);

$gerador = new \App\Acoplamento\GeradorNotaFiscal();
$gerador->addAcaoAposGerarNota(new \App\Acoplamento\EnviadorDeEmail());
$gerador->addAcaoAposGerarNota(new \App\Acoplamento\NotaFiscalDao());
$gerador->gera($fatura);

