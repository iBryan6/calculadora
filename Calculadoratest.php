<?php

require 'Calculadora.php';
use PHPUnit\Framework\TestCase;

final class CalculadoraTests extends TestCase{
    private $calculadora;

    protected function setUp()
    {
        $this->calculadora = new Calculadora();
    }

    protected function tearDown()
    {
        $this->calculadora = NULL;
    }

    public function testSuma()
    {
        $result = $this->calculadora->sumar(1, 2);
        $this->assertEquals(3, $result);
    }
	 public function testResta()
    {
        $result = $this->calculadora->resta(2, 2);
        $this->assertEquals(0, $result);
    }
	public function testDivision()
    {
        $result = $this->calculadora->division(10, 2);
        $this->assertEquals(5, $result);
    }
}?>


