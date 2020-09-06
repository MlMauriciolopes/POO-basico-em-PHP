<?php

	require_once 'ContaBancaria.php';
	require_once 'Pessoa.php';
	
	$c = new ContaBancaria(123, 45678, 78541230);

	//echo $c->getContaBancaria();

	$p = new Pessoa('Maurício', $c);

	//var_dump($p);

	echo $p->getConta()->getContaBancaria();

	var_dump($p);