<?php

namespace Tests;

use App\Classes\Computer;
use App\Classes\ComputerDecorator;
use App\Classes\ComputerMotherboard;
use PHPUnit\Framework\TestCase;

class ComputerMotherboardTest extends TestCase
{
    protected $sut; // System Under Test.

    protected function setUp()
    {
        parent::setUp();

        // Create a stub for the SomeClass class.
        $stub = $this->createMock(Computer::class);

        // You can only have one dependency, which is the sut.
        $this->sut = new ComputerMotherboard($stub);
    }

    public function testInstantiation () : void
    {
        $this->assertNotNull($this->sut);
    }

    public function testInstanceOf() : void
    {
        $this->assertInstanceOf(ComputerDecorator::class, $this->sut);
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
