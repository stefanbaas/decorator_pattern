<?php

namespace App\Classes;

abstract class ComputerDecorator implements \App\Contracts\Computer
{
    protected $computer;

    public function __construct(\App\Contracts\Computer $computer)
    {
        $this->computer = $computer;
    }

    public function getName(): string
    {
        // TODO: Implement getName() method.
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