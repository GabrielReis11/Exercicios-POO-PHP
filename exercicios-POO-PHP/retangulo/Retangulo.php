<?php

class Retangulo
{
    private int $largura;
    private int $altura;

    public function __construct(int $largura, int $altura )
    {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    public function getArea()
    {
        return $this->largura * $this->altura;
    }

    public function getPerimetro()
    {
        return ($this->largura + $this->altura) * 2;
    }
}