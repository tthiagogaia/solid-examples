<?php
use App\SingleResponsibilityPrinciple\Funcionario;
use App\SingleResponsibilityPrinciple\Desenvolvedor;
use App\SingleResponsibilityPrinciple\DezOuVintePorcento;
use App\SingleResponsibilityPrinciple\CalculadoraDeSalario;

include __DIR__ . '/vendor/autoload.php';

$dev = new Funcionario(new Desenvolvedor(new DezOuVintePorcento()), 3100);
$calculadora = new CalculadoraDeSalario();
echo $calculadora->calcula($dev) . PHP_EOL;;

