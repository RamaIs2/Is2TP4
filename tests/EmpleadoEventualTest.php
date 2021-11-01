<?php
require_once 'EmpleadoTest.php';
class EmpleadoEventualTest extends EmpleadoTest
{
 public function crear($nombre="Fulano",$apellido="Detal",$dni=123,$salario=2000,Array $montos = [2000])
 {
	$empe = new \App\EmpleadoEventual($nombre,$apellido,$dni,$salario,$montos);
	return $empe;
  }

	public function testprobarcalcularlacomision()
    {
		$m = $montos;
	    $this->assertEquals($m,calcularComision());
	}
	public function testcalculoingresototal()
	{
	    $m = $montos;
	    $this->assertEquals($m,calcularIngresoTotal());
	}
	 public function testNosepuedesernegativoocero()

       {
	 $this->expectException(\Exception::class);
      $montos <= [0]; 
      }

}
