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

    public function testGetPartsTest() : void
    {
        $this->assertTrue(is_array($this->sut->getParts()));
    }

}
