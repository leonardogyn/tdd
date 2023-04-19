<?php

namespace CDC\Loja\RH;

use CDC\Loja\Test\TestCase;

/**
 * @group Loja
 */
class FuncionarioTest extends TestCase
{

    private $className = 'CDC\Loja\RH\Funcionario';
    private $class;
    
    protected function setUp():void
    {
        parent::setUp();
        $this->class = new $this->className('Andre', 1000.0, 'desenvolvedor');
    }

    protected function tearDown():void
    {
        parent::tearDown();
        unset($this->class);
    }
    
    /**
     * @covers CDC\Loja\RH\Funcionario::getNome()
     */
    public function testGetNome()
    {
        $this->assertNotNull($this->class->getNome());
        $this->assertIsString('string', $this->class->getNome());
        $this->assertEquals('Andre', $this->class->getNome());
    }
    
    /**
     * @covers CDC\Loja\RH\Funcionario::getSalario()
     */
    public function testGetSalario()
    {
        $this->assertNotNull($this->class->getSalario());
        $this->assertIsFloat($this->class->getSalario());
        $this->assertEquals(1000.0, $this->class->getSalario());
    }
    
    /**
     * @covers CDC\Loja\RH\Funcionario::getCargo()
     */
    public function testGetCargo()
    {
        $this->assertNotNull($this->class->getCargo());
        $this->assertIsString('string', $this->class->getCargo());
        $this->assertEquals('desenvolvedor', $this->class->getCargo());
    }

}
