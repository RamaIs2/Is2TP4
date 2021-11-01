<?php
require_once 'EmpleadoTest.php';
class EmpleadoPermanenteTest extends EmpleadoTest
{ 
public function crear($nombre = "Fulano", $apellido = "Detal", $dni = 123, $salario = 2000,\datetime $fechaingreso = null,Array $montos = [2000])
	{
        $empp = new \App\EmpleadoPermanente($nombre,$apellido,$dni,$salario,$fechaingreso,$montos);
	    return $empp;
	}
 public function testobtenerlafechadeingreso()
{	
      $m = $this->crear(null);
      $this->assertEquals((new DateTime())->format('Y-m-d\TH:i'), ($m->getFechaIngreso())->format('Y-m-d\TH:i'));
      
}
   public function testcalcularlacomision()
   {
		$m = $this->$montos;
	    $this->assertEquals($m,calcularComision());
	}
	public function testcalculoingresototal()
	{
	    $m = $montos;
	    $this->assertEquals($m,calcularIngresoTotal());
	}
	 public function testempleadovariosañosdeantiguedad()
	 {
		 $t= $this->getFechaIngreso();
		 $this->assertEquals($t,calcularAntiguedad());
	 }
	 public function testempleadosinpropocionarlafechadeingreso()
	 {
	 $t= $this->getFechaIngreso;
	 $this->assertEquals(0,$t->getAntiguedad());
     }
  public function testfechaposterioraladehoy()
  {
  $this->expectException(\Exception::class);
  $this->assertEquals->getfechaIngreso();
}
}

