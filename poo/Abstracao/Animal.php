<?php

	abstract class Animal // Classe abstrata não pode ser intanciada
	{
		abstract public function locomover();

		public function organismo()
		{
			echo 'Pluricelular';
		}
	}