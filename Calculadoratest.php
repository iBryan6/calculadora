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
}?>

    <!--        LINECODE BASH: vendor/bin/phpunit Calculadoratest.php
        composer require --dev phpunit/phpunit ^7
        composer dump-autoload -o
        composer update-->
