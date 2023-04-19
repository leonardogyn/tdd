<?php

namespace CDC\Loja\Produto;

use CDC\Loja\Test\TestCase;

/**
 * @group Loja
 */
class ProdutoTest extends TestCase
{
    private $className = 'CDC\Loja\Produto\Produto';
    private $class;

    protected function setUp():void
    {
        parent::setUp();
        $this ->class = new $this->className('Geladeira', 799.0, 1);
    }

    protected function tearDown():void
    {
        parent::tearDown();
    }
    
    /**
     * @covers CDC\Loja\Produto\Produto::getQuantidade()
     */
    public function testGetQuantidade()
    {
        $this->assertIsInt($this->class->getQuantidade());
        $this->assertIsInt(1, $this->class->getQuantidade());
    }
    
    /**
     * @covers CDC\Loja\Produto\Produto::getNome()
     */
    public function testGetNome()
    {
        $this->assertNotNull($this->class->getNome());
        $this->assertIsString('string', $this->class->getNome());
        $this->assertIsString('Geladeira', $this->class->getNome());
    }
    
    /**
     * @covers CDC\Loja\Produto\Produto::getValorUnitario()
     */
    public function testGetValorUnitario()
    {
        $this->assertNotNull($this->class->getValorUnitario());
        $this->assertIsFloat($this->class->getValorUnitario());
        $this->assertIsFloat(799.0, $this->class->getValorUnitario(), 0.0001);
    }
    
    /**
     * @covers CDC\Loja\Produto\Produto::getValorTotal()
     */
    public function testGetValorTotal()
    {
        $produto = new $this->className('Geladeira', 500.0, 2);
        $this->assertNotNull($produto->getValorTotal());
        $this->assertIsFloat($produto->getValorTotal());
        $this->assertIsFloat(1000.0, $produto->getValorTotal(), 0.0001);
    }
    
    /**
     * @covers CDC\Loja\Produto\Produto::inativa()
     * @covers CDC\Loja\Produto\Produto::getStatus()
     */
    public function testInativa()
    {
        $this->class->inativa();
        $this->assertFalse($this->class->getStatus());
    }

}
