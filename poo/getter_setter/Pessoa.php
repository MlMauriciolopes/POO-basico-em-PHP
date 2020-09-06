<?php

	class Pessoa
	{
		private $nome;
		private $idade;

		public function setNome($nm)
		{
			$this->nome = $nm;
		}

		public function setIdade($age)
		{
			$this->idade = $age;
		}

		public function getNome()
		{
			return $this->nome;
		}

		public function getIdade()
		{
			return $this->idade;
		}
	}