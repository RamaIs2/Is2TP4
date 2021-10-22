<?php
require_once 'EmpleadoTest.php';
class EmpleadoEventualTest extends EmpleadoTest
{
 public function crear($nombre="Fulano",$apellido="Detal",$dni=123,$salario=2000,Array $montos = [2000])
 {
	$empe = new \App\EmpleadoEventual($nombre,$apellido,$dni,$salario,$montos);
	return $empe;
  }
  
}

