<?php

namespace App\Classes;

class ComputerMotherboard implements \App\Contracts\Computer
{
    private $computer;

    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    public function getName(): string
    {
        return $this->computer->getName()." Motherboard";
    }

    public function getParts(): array
    {
        // TODO: Implement getParts() method.
    }

    public function getCost(): float
    {
        // TODO: Implement getCost() method.
    }
}