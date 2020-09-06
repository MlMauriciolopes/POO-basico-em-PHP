<?php

	class Aula
	{
		public $turma;
		public $alunos;
	}

	$a = new Aula;
	$a->turma = 210;
	$a->alunos = 60;

	//var_dump($a);

	$b = new stdClass();
	$b->nome = 'Maurício';
	var_dump($b);

	$cores = array('cores' => array('vermelho', 'verde'));
	//var_dump($cores);



	#transformando array em stdClass:
	$d = (Object) $cores;

	var_dump($d);



	# converter objeto em array:
	$e = (array) $a;

	var_dump($e);

	# StdClass = Criar um objeto sem ter nenhuma classe.