<?php 
echo "Empleando Objetos";

//include "Base.php";
//include "Hijo.php";
include "clase.php";

echo "<br />";

/*$obj=new Hijo("Estefany","Plasencia","Tecnico","Soporte");

$obj->mostrar();*/

echo "<br />";
Clase::$nombres="Estefany Plasencia";
Clase::mostrar();

 ?>