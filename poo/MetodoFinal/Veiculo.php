<?php

	class Veiculo
	{
		public $cor;

		final public function pintar($color)
		{
			$this->cor = $color;
		}
	}