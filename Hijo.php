<?php 
	
	class Hijo extends Base

	{

		public $titulo;
		public $cargo;

		function __construct($Nombres,$Apellidos,$titulo,$cargo)
		{
			parent::__construct($Nombres,$Apellidos);
			$this->titulo=$titulo;
			$this->cargo=$cargo;
		}

		public function mostrar()
		{
			$this->show();
			echo "<br />";
			echo $this->titulo, PHP_EOL,$this->cargo;
		}

		protected function show()

		{
			echo "Metodo sobreescristo";
		}
	
	}


 ?>