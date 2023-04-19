<?php

namespace CDC\Loja\FluxoDeCaixa;

use CDC\Loja\Test\TestCase;

/**
 * @group Loja
 */
class PedidoTest extends TestCase
{

    private $className = 'CDC\Loja\FluxoDeCaixa\Pedido';
    private $class;
    
    protected function setUp():void
    {
        parent::setUp();
        $this->class = new $this->className('Cliente', 599.0, 3);
    }

    protected function tearDown():void
    {
        parent::tearDown();
        unset($this->class);
    }
    
    /**
     * @covers CDC\Loja\FluxoDeCaixa\Pedido::getCliente()
     */
    public function testGetCliente()
    {
        $this->assertNotNull($this->class->getCliente());
    }
    
    /**
     * @covers CDC\Loja\FluxoDeCaixa\Pedido::getValorTotal()()
     */
    public function testGetValorTotal()
    {
        $this->assertNotNull($this->class->getValorTotal());
        $this->assertIsFloat($this->class->getValorTotal());
    }
    
    /**
     * @covers CDC\Loja\FluxoDeCaixa\Pedido::getQuantidadeItens()
     */
    public function testGetQuantidadeItens()
    {
        $this->assertIsInt($this->class->getQuantidadeItens());
        $this->assertIsInt(3, $this->class->getQuantidadeItens());
    }

}
