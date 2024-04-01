<?php


class ContaBanco
{
    private string $numeroConta;
    private string $nomeTitular;
    private int $saldo;

    public function __construct(string $numeroConta, string $nomeTitular, int $saldo)
    {
        $this->numeroConta = $numeroConta;
        $this->nomeTitular = $nomeTitular;
        $this->saldo = $saldo;
    }

    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function getSaldo(): int
    {
        return $this->saldo;
    }

    public function sacar($valor)
    {
        $this->saldo = $this->saldo - $valor;
    }

    public function depositar($valor)
    {
        $this->saldo = $this->saldo + $valor;
    }
}