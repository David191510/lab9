<?php
require_once(__DIR__.'/Calculadora.php');
use \PHPUnit\Framework\TestCase;
class CalculadoraTest extends Testcase{
    public function testSumar(){
        $calculadora = new Calculadora();
        $resulrado_calculado = $calculadora->sumar(3,3);
        $this->assertEquals(6, $resulrado_calculado);
    }
}