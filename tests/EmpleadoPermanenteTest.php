<?php
require_once "EmpleadoTest.php";
class EmpleadoPermanenteTest extends EmpleadoTest
{ 
public function crear($nombre = "Fulano", $apellido = "Detal", $dni = 123, $salario = 2000,\datetime $fechaingreso = null)
	{
        $empp = new App\EmpleadoPermanente($nombre,$apellido,$dni,$salario,$fechaingreso);
	    return $empp;
	}
	
	
}