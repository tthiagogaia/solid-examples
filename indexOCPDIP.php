<?php

include __DIR__ . '/vendor/autoload.php';

$tabelaDePrecoPadrao = new \App\OCPDIP\TabelaDePrecoPadrao();
$entrega = new \App\OCPDIP\Correios();

$calculadora = new \App\OCPDIP\CalculadoraDePrecos($tabelaDePrecoPadrao, $entrega);
echo $calculadora->calcula(new \App\OCPDIP\Compra(300, 'Sao Paulo')) . PHP_EOL;
