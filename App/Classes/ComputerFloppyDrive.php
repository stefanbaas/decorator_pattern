<?php

namespace App\Classes;

class ComputerFloppyDrive extends ComputerDecorator
{
    public function getName(): string
    {
        return $this->computer->getName()." FloppyDrive";
    }

    public function getParts(): array
    {
        $parts = $this->computer->getParts();
        $parts[] = 'FloppyDrive';
        return $parts;
    }

    public function getCost(): float
    {
        $cost = $this->computer->getCost();
        $cost += 100;

        return $cost;
    }
}