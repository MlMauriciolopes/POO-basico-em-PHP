<?php

	require 'veiculo.php';
	require 'Carro.php';
	require 'Moto.php';

	$c = new Carro;
	$c->ligar();
	$c->desligar();
	$c->abrirPortas();
	echo $c->cor;

	echo '<br><br>';

	$m = new Moto;
	$m->ligar();
	echo $m->cor;