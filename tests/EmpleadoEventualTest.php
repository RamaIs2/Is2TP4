<?php
require_once 'EmpleadoTest.php';
class EmpleadoEventualTest extends EmpleadoTest
{
 public function crear($nombre="Fulano",$apellido="Detal",$dni=123,$salario=2000,Array $montos = [1000,200,300])
 {
	$empe = new \App\EmpleadoEventual($nombre,$apellido,$dni,$salario,$montos);
	return $empe;
  }

	public function testprobarcalcularlacomision()
    {
		$m = $this-> crear("Fulano","Detal",123,2000,Array(1000,200,300));
	    $this->assertEquals(25.0,$m-> calcularComision());
	}
	public function testcalculoingresototal()
	{
	    $s = $this-> crear("Fulano","Detal",123,2000,Array(1000,200,300));
	    $this->assertEquals(2025.0,$s-> calcularIngresoTotal());
	}
	 public function testNosepuedesernegativoocero()
       {
    $this->expectException(\Exception::class);
    $m = $this->crear("Fulano","Detal",123,2000,Array(-500,0));
   }

}
