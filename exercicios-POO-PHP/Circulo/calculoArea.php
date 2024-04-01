<?php
require_once 'Circulo.php';

$primeiroCirculo = new Circulo(5);

echo $primeiroCirculo->getRaio() . PHP_EOL;
echo $primeiroCirculo->getArea();
