<?php
require_once 'EmpleadoTest.php';
class EmpleadoPermanenteTest extends EmpleadoTest
{ 
public function crear($nombre = "Fulano", $apellido = "Detal", $dni = 123, $salario = 2000,\datetime $fechaingreso = null)
	{
        $empp = new \App\EmpleadoPermanente($nombre,$apellido,$dni,$salario,$fechaingreso);
	    return $empp;
	}
 public function testobtenerlafechadeingreso();
{	
	  $this->assertEquals((new DateTime())->format('Y-m-d\TH:i'), 
      ($emp->getFechaIngreso())->format('Y-m-d\TH:i'));
}
   public function testcalcularlacomision();
   {
		$m = $this->$montos;
	    $this->assertEquals($m,calcularComision());
	}
	public function testcalculoingresototal();
	{
	    $m = $this->$montos;
	    $this->assertEquals(2000->calcularIngresoTotal());
	}
	 public function testempleadovariosañosdeantiguedad()
	 {
		 $t= $this->getFechaIngreso;
		 $this->assertEquals($t,calcularAntiguedad());
	 }
	 public function testempleadosinpropocionarlafechadeingreso();
	 {
	 $t= $this->getFechaIngreso;
	  $this->assertEquals($t, 0->getAntiguedad());
  }
  public function testfechaposterioraladehoy();
  {
  $this->expectException(\Exception::class);
  $this->assertEquals->getfechaIngreso;
}
}

