<?php

	class Pessoa
	{
		//atributos
		private $nome;
		private $idade;

		public function __construct($name, $age)
		{
			$this->nome = $name;
			$this->idade = $age;
		}

		public function __get($atrib)
		{
			return $this->$atrib;
		}

		public function __set($atrib, $val)
		{
			$this->$atrib = $val;
		}

		//public function __destruct()
		//{
		//	echo 'Hasta la vista, baby !!!';
		//}
	}