<?php

	class Pessoa
	{
		private $estimacao;

		public function addEstimacao(IAnimal $objAnimal)
		{
			$this->estimacao[] = $objAnimal->getAnimal();
		}

		public function showEstimacao()
		{	
			echo 'Animais de Estimação: <br><br>';
			foreach ($this->estimacao as $estim)
			{
				echo $estim.'<br>';
			}
		}
	}