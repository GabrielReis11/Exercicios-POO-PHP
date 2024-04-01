<?php

require_once 'Retangulo.php';

$retangulo1 = new Retangulo(4, 5);

echo $retangulo1->getArea() . PHP_EOL;
echo $retangulo1->getPerimetro();