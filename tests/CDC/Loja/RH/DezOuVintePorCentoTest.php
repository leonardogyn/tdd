<?php

namespace CDC\Loja\RH;

use CDC\Loja\Test\TestCase;

/**
 * @group Loja
 */
class DezOuVintePorCentoTest extends TestCase
{

    public $className = 'CDC\Loja\RH\DezOuVintePorCento';
    public $class;
    
    protected function setUp():void
    {
        parent::setUp();
        $this->class = new $this->className();
    }

    protected function tearDown():void
    {
        parent::tearDown();
        unset($this->class);
    }
    
    public function testCalcula()
    {
        $salario = $this->class->calcula(new Funcionario('Andre', 1000.0, 'desenvolvedor'));
        $this->assertEqualsWithDelta((1000 * 0.9), $salario, 0.0001);
        
        $salario = $this->class->calcula(new Funcionario('Andre', 3200.0, 'desenvolvedor'));
        $this->assertEqualsWithDelta((3200 * 0.8), $salario, 0.0001);
    }

}
