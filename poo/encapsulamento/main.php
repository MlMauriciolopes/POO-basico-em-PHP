<?php

	require 'Pessoa.php';

	$p = new Pessoa;
	//$p->nome = 'Mauricio';
	$p->setNome(6161615);   #tratamento de erro no main.php no echo.

	var_dump($p);