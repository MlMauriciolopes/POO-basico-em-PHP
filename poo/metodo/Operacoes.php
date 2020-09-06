<?php

	class Operacoes
	{
		public function somar($num1, $num2)
		{
			$resultado = $num1 + $num2;

			return $resultado;
		}

		public function subtracao($num1, $num2)
		{
			$resultado = $num1 - $num2;

			echo $resultado;
		}
	}