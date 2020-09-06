<?php

	require 'Caneta.php';

	$c = new Caneta; #new = nova classe
	$c ->cor = 'vermelho';
	$c ->espessura = 1;

	$c ->escrever();

	var_dump($c);