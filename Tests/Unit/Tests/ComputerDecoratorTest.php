<?php

namespace Tests;

use App\Contracts\Computer;
use PHPUnit\Framework\TestCase;
use App\Classes\ComputerDecorator;

class DecoratorDouble extends ComputerDecorator {

}

class ConcreteComputerDouble implements Computer {

    public function getName(): string
    {
        return (string) 'Computer';
    }

    public function getParts(): array
    {
        return [];
    }

    public function getCost(): float
    {
        return (float) 100;
    }
}

class ComputerMotherboardDouble extends DecoratorDouble {

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
        return (float) $this->computer->getCost() + 250;
    }
}

class ComputerFloppyReader extends DecoratorDouble {

    public function getName(): string
    {
        return $this->computer->getName()." FloppyReader";
    }

    public function getParts(): array
    {
        $parts = $this->computer->getParts();
        $parts[] = 'FloppyReader';
        return $parts;
    }

    public function getCost(): float
    {
        return (float) $this->computer->getCost() + 100;
    }
}

class ComputerDecoratorTest extends TestCase
{
    protected $sut;

    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUp();

        // Create a stub for the SomeClass class.
        $stub = new ConcreteComputerDouble();
        $this->sut = new DecoratorDouble($stub);
    }

    public function testInstantiation () : void
    {
        $this->assertNotNull($this->sut);
    }

    public function testInstanceOf() : void
    {
        $this->assertInstanceOf(Computer::class, $this->sut);;
    }

    public function testGetName() : void
    {
        $computer = new ComputerMotherboardDouble(new ConcreteComputerDouble());

        $this->assertEquals('Computer Motherboard', $computer->getName());

        $computer2 = new ComputerMotherboardDouble(new ComputerFloppyReader(new ConcreteComputerDouble()));

        $this->assertEquals('Computer FloppyReader Motherboard', $computer2->getName());
    }

    public function testGetCost() : void
    {
        $computer = new ComputerMotherboardDouble(new ConcreteComputerDouble());

        $this->assertEquals(350.00, $computer->getCost());

        $computer2 = new ComputerMotherboardDouble(new ComputerFloppyReader(new ConcreteComputerDouble()));

        $this->assertEquals(450.00, $computer2->getCost());
    }

    public function testGetParts() : void
    {
        $computer = new ComputerMotherboardDouble(new ConcreteComputerDouble());

        $this->assertEquals(['Motherboard'], $computer->getParts());

        $computer2 = new ComputerMotherboardDouble(new ComputerFloppyReader(new ConcreteComputerDouble()));

        $this->assertEquals(['FloppyReader', 'Motherboard'], $computer2->getParts());
    }
}
