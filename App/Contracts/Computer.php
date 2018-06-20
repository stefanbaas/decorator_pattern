<?php

namespace App\Contracts;

interface Computer
{
    public function getParts() : array;
    public function getCost() : float;
}