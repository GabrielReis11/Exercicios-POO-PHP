<?php

class Circulo
{
    private $raio;

    public function __construct(int $raio)
    {
        $this->raio = $raio;
    }
    public function getRaio(): int
    {
        return $this->raio;
    }
    public function getArea():float
    {
        return (($this->raio)**2)*3;
    }

}