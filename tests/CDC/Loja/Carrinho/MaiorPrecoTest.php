<?php

namespace CDC\Loja\Carrinho;

use CDC\Loja\Test\TestCase,
    CDC\Loja\Carrinho\CarrinhoDeCompras,
    CDC\Loja\Carrinho\MaiorPreco,
    CDC\Loja\Produto\Produto;

/**
 * @group Loja
 */
class MaiorPrecoTest extends TestCase
{

    /**
     * @covers CDC\Loja\Carrinho\MaiorPreco::encontra()
     */
    public function testDeveRetornarZeroSeCarrinhoVazio()
    {
        $carrinho = new CarrinhoDeCompras();

        $algoritmo = new MaiorPreco();
        $valor = $algoritmo->encontra($carrinho);
        $this->assertEqualsWithDelta(0, $valor, 0.0001);
    }

    /**
     * @covers CDC\Loja\Carrinho\MaiorPreco::encontra()
     */
    public function testDeveRetornarValorDoItemSeCarrinhoCom1Elemento()
    {
        $carrinho = new CarrinhoDeCompras();
        $carrinho->adiciona(new Produto("Geladeira", 1, 900.00));
        $algoritmo = new MaiorPreco();
        $valor = $algoritmo->encontra($carrinho);
        $this->assertEqualsWithDelta(900.00, $valor, 0.0001);
    }

    /**
     * @covers CDC\Loja\Carrinho\MaiorPreco::encontra()
     */
    public function testDeveRetornarMaiorValorSeCarrinhoComMuitosElementos()
    {
        $carrinho = new CarrinhoDeCompras();
        $carrinho->adiciona(new Produto("Geladeira", 1, 900.00));
        $carrinho->adiciona(new Produto("Fogão", 1, 1500.00));
        $carrinho->adiciona(new Produto("Máquina de lavar", 1, 750.00));
        $algoritmo = new MaiorPreco();
        $valor = $algoritmo->encontra($carrinho);
        $this->assertEqualsWithDelta(1500.00, $valor, 0.0001);
    }

}
