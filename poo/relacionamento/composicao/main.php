<?php

	require_once 'Game.php';
	require_once 'VideoGame.php';

	$v = new VideoGame;
	$v->adcGame('God of War');

	var_dump($v);
