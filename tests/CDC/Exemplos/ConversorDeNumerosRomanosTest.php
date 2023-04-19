<?php

namespace CDC\Exemplos;

require "./vendor/autoload.php";

use CDC\Exemplos\ConversorDeNumeroRomano;
use PHPUnit\Framework\TestCase as PHPUnit;

/**
 * @group Exemplos
 * @group Romanos
 */
class ConversorDeNumeroRomanoTest extends PHPUnit
{

    /**
     * @covers CDC\Exemplos\ConversorDeNumeroRomano::converte()
     */
    public function testDeveEntenderOSimboloI()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("I");
        $this->assertEquals(1, $numero);
    }

    /**
     * @covers CDC\Exemplos\ConversorDeNumeroRomano::converte()
     */
    public function testeDeveEntenderOSimboloV()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("V");
        $this->assertEquals(5, $numero);
    }

    /**
     * @covers CDC\Exemplos\ConversorDeNumeroRomano::converte()
     */
    public function testDeveEntenderOSimboloII()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("II");
        $this->assertEquals(2, $numero);
    }

    /**
     * @covers CDC\Exemplos\ConversorDeNumeroRomano::converte()
     */
    public function testeDeveEntenderOSimboloXXII()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("XXII");
        $this->assertEquals(22, $numero);
    }

    /**
     * @covers CDC\Exemplos\ConversorDeNumeroRomano::converte()
     */
    public function testDeveEntenderOSimboloIX()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("IX");
        $this->assertEquals(9, $numero);
    }

    /**
     * @covers CDC\Exemplos\ConversorDeNumeroRomano::converte()
     */
    public function testDeveEntenderOSimboloXXIV()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("XXIV");
        $this->assertEquals(24, $numero);
    }

}
