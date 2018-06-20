<?php

namespace App\Classes;

class Computer implements \App\Contracts\Computer
{

    public function getParts(): array
    {
        return [];
    }

    public function getCost(): float
    {
        return 0.00;
    }
}