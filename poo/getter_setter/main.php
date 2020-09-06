<?php

	require'Pessoa.php';

	$p = new Pessoa;
	$p->setNome('Mauricio Lopes');
	$p->setIdade(30);
	echo $p->getNome().' '.$p->getIdade();

	$p->setNome('Jo Jo');
	$p->setIdade(20);
	echo $p->getNome().' '.$p->getIdade();

	//var_dump($p);