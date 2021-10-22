<?php
require_once 'EmpleadoTest.php';
class EmpleadoEventualTest extends EmpleadoTest
{
 public function crear($nombre="Fulano",$apellido="Detal",$dni=123,$salario=2000,Array $montos = [2000])
 {
	$empe = new \App\EmpleadoEventual($nombre,$apellido,$dni,$salario,$montos);
	return $empe;
  }
  {
	public function testprobarcalcularlacomision();
    {
		$m = $this->$montos;
	    $this->assertEquals($m,calcularComision());
	}
	public function testcalculoingresototal();
	    $m = $this->$montos;
	    $this->assertEquals($m,2000->calcularIngresoTotal());
	
	 public function testNosepuedesernegativoocero()
    {
       {
        $montos = [0,-100,100];
        $this->expectException(\Exception::class);
        $e = $this->eventual([0,-100,100]);
    }

}

