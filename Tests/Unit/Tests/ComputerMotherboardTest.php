<?php

namespace Tests;

use App\Classes\ComputerMotherboard;
use PHPUnit\Framework\TestCase;

class ComputerMotherboardTest extends TestCase
{
    protected $sut; // System Under Test.

    protected function setUp()
    {
        parent::setUp();
        // You can only have one dependency, which is the sut.
        $this->sut = new ComputerMotherboard();
    }

    public function testInstantiation () : void
    {
        $this->assertNotNull($this->sut);
    }


}
