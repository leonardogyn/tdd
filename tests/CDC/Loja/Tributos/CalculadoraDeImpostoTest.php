<?php

namespace CDC\Loja\Tributos;

use CDC\Loja\Test\TestCase,
    CDC\Loja\FluxoDeCaixa\Pedido,
    CDC\Loja\Tributos\CalculadoraDeImposto;
use Mockery;

/**
 * @group Loja
 */
class CalculadoraDeImpostoTest extends TestCase
{

    /**
     * @covers CDC\Loja\Tributos\CalculadoraDeImposto::calculaImposto()
     */
    public function testCalculoImpostoParaPedidosSuperiorA2000Reais()
    {
        $tabela = Mockery::mock("CDC\Loja\Tributos\Tabela");
        // ensinando o mock a devolver 0.1 caso o método
        // paraValor seja invocado com o valor 2500.0
        $tabela->shouldReceive("paraValor")
                ->with(2500.0)->andReturn(0.1);
        $pedido = new Pedido("Andre", 2500.0, 3);
        $calculadora = new CalculadoraDeImposto($tabela);
        $valor = $calculadora->calculaImposto($pedido);
        $this->assertEqualsWithDelta((2500.0 * 0.1), $valor, 0.00001);
    }

}
