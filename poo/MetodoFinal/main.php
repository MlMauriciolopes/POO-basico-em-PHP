<?php

	require_once 'Veiculo.php';
	require_once 'Carro.php';

	$c = new Carro;
	$c->pintar('Vermelho');
	
	var_dump($c);