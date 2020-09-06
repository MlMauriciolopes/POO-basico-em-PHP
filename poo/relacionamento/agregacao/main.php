<?php

	require_once 'Produto.php';
	require_once 'Carrinho.php';

	$p1 = new Produto('Caneta', 3);
	$p2 = new Produto('Borracha', 2);

	$c1 = new Carrinho;
	$c1->adcCarrinho($p1);
	$c1->adcCarrinho($p2);

	//var_dump($c1->getProdutos());

	foreach ($c1->getProdutos() as $produto) {
		echo $produto->getDescricao().' | '.$produto->getValor().'<br>';
	}
