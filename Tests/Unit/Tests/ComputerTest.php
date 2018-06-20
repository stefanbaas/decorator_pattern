<?php

namespace Tests;

use App\Classes\Computer;
use PHPUnit\Framework\TestCase;

class ComputerTest extends TestCase
{
    protected $sut; // System Under Test.

    protected function setUp()
    {
        parent::setUp();
        // You can only have one dependency, which is the sut.
        $this->sut = new Computer();
    }

    public function testInstantiation () : void
    {
        $this->assertNotNull($this->sut);
    }

    public function testGetName() : void
    {
        $this->assertTrue(is_string($this->sut->getName()));
    }

    public function testGetParts() : void
    {
        $this->assertTrue(is_array($this->sut->getParts()));
    }

    public function testGetCost() : void
    {
        $this->assertTrue(is_float($this->sut->getCost()));
    }
}
