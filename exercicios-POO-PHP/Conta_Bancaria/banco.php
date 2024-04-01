<?php

require_once 'ContaBanco.php';

$contaUm = new \ContaBanco('1', 'Gabriel', 200);

echo $contaUm->getNumeroConta() . PHP_EOL;
echo $contaUm->getNomeTitular() . PHP_EOL;
echo $contaUm->getSaldo() . PHP_EOL;

$contaUm->depositar(500);

echo $contaUm->getSaldo() . PHP_EOL;