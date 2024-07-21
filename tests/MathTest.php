<?php

use Phpandco\Mathcomponent\Math;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    private $math;

    protected function setUp(): void
    {
        $this->math = new Math();
    }

    public function testAdd()
    {
        $this->assertEquals(5, $this->math->add(2, 3));
    }

    public function testSubtract()
    {
        $this->assertEquals(1, $this->math->subtract(3, 2));
    }

    public function testMultiply()
    {
        $this->assertEquals(6, $this->math->multiply(2, 3));
    }

    public function testDivide()
    {
        $this->assertEquals(2, $this->math->divide(6, 3));
    }

    public function testDivideByZero()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->math->divide(6, 0);
    }
}
