<?php

	require_once 'IAnimal.php';
	require_once 'Gato.php';
	require_once 'Cachorro.php';
	require_once 'Pessoa.php';


	$dog = new Cachorro;
	$cat = new Gato;

	$p = new Pessoa;
	$p->addEstimacao($dog);
	$p->addEstimacao($cat);
	$p->showEstimacao();