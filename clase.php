<?php 

	class Clase
	{
		public static $nombres;

		/*function __construct()
		{
			$this->nombres="Desconocido";
		}*/

		public function mostrar()
		{
			echo "metodo mostrar()";
			echo "<br />";
			echo self::$nombres;
		}
	}









 ?>