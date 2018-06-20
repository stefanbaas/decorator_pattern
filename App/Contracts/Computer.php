<?php

namespace App\Contracts;

interface Computer
{
    public function getParts() : string;
    public function getCost() : float;
}