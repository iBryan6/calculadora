<?php
use calculadora;
use PHPUnit\Framework\TestCase;

final class CalculadoraTest extends TestCase{
    public function Tests(){
        $this->assertsEquals(5,$calculadora->sumar(2,3));
    }
}?>
