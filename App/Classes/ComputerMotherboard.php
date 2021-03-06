<?php

namespace App\Classes;

class ComputerMotherboard extends ComputerDecorator
{
    public function getName(): string
    {
        return $this->computer->getName()." Motherboard";
    }

    public function getParts(): array
    {
        $parts = $this->computer->getParts();
        $parts[] = 'Motherboard';
        return $parts;
    }

    public function getCost(): float
    {
        $cost = $this->computer->getCost();
        $cost += 350;

        return $cost;
    }
}