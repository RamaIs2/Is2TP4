<?php
require_once 'EmpleadoTest.php';
class EmpleadoPermanenteTest extends EmpleadoTest
{ 
public function crear($nombre = "Fulano", $apellido = "Detal", $dni = 123, $salario = 2000,\datetime $fechaingreso = null)
	{
        $empp = new \App\EmpleadoPermanente($nombre,$apellido,$dni,$salario,$fechaingreso);
	    return $empp;
	}
 public function testobtenerlafechadeingreso()
{	
      $m = $this->crear("Fulano","Detal",123,2000,null);
      $this->assertEquals((new DateTime())->format('Y-m-d\TH:i'), ($m->getFechaIngreso())->format('Y-m-d\TH:i'));
      
}
   public function testcalcularlacomision()
   {
		$m = $this->crear("Fulano","Detal",123,2000,null);
	    $this->assertEquals($m,calcularComision());
	}
	public function testcalculoingresototal()
	{
	 $m = $this->crear("Fulano","Detal",123,2000,null);
	    $this->assertEquals($m,calcularIngresoTotal());
	}
	 public function testempleadovariosañosdeantiguedad()
	 {
		 $t= $this->crear("Fulano","Detal",123,2000,null);
		 $this->assertEquals($t,calcularAntiguedad());
	 }
	 public function testempleadosinpropocionarlafechadeingreso()
	 {
	 $t= $this->crear("Fulano","Detal",123,2000,null);
	 $this->assertEquals(0,$t->getAntiguedad());
     }
  public function testfechaposterioraladehoy()
  {
  $m = $this->crear("Fulano","Detal",123,2000,null);
  $this->expectException(\Exception::class);
  $this-> $m>getfechaIngreso();
}
}

