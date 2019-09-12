<?php 

	class  Base{

		private $Nombres;
		private $Apellidos;

		function __construct($Nombres,$Apellidos)
		{
			$this ->Nombres=$Nombres;
			$this ->Apellidos=$Apellidos;
		}

		protected function show()
		{
			echo $this->Nombres, PHP_EOL, $this->Apellidos;
		}

		

	}

 ?>