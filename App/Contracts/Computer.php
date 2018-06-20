<?php

namespace App\Contracts;

interface Computer
{
    public function getName() : string;
    public function getParts() : array;
    public function getCost() : float;
}