<?php

	
	class Pessoa
	{
		private $nome; #public, protected, private

		public function setNome($name)
		{
			if (is_string($name)) {
				$this->nome = $name;
			}
			else
			{
				echo 'Dados incorretos ! </br></br>';
			}
			$this->nome = $name;
		} 
	}
