<?php

	require 'Operacoes.php';

	$obj = new Operacoes;
	echo $obj->somar(20,30);

	echo '<br>'; #pular linha HTML

	echo $obj->subtracao(50,10);