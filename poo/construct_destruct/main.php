<?php

	require 'Pessoa.php';

	$p = new Pessoa('Maurício', 30);

	echo $p->nome.'<br>';
	echo $p->idade.'<br>';

	unset($p); #destruir objeto 

	$p->nome = 'Lopes';

	echo $p->nome;

	var_dump($p);

	#std class