<?php

	require_once 'Animal.php';
	require_once 'Cachorro.php';
	require_once 'Cobra.php';

	$c = new Cachorro;
	$c->organismo().'<br>'.$c->locomover();

	$c2 = new Cobra;
	$c2->organismo().'<br>'.$c2->locomover();