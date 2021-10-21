<?php
abstract class EmpleadoTest extends \PHPUnit\Framework\TestCase
{
	public function testobtenernombreyapellido()
	{
	$m = $this->crear("Fulano","Detal");
	$this->assertequals("Fulano Detal",$m->getNombreApellido());  
    }
	 public function testFuncionaeldni()
 {
	 $d = $this->crear(123);
	 $this->assertEquals(123, $d->getDNI());
 }
 
 public function testIngresodelsalario()
 {
	 $s= $this->crear(2000);
	 $this->assertEquals(2000, $s->getSalario());
 }
	 
			
 public function testquesectorseencuentra()
 {
	 $n = $this->crear();
	 $n->setSector("contabilidad");
	 $this->assertEquals("contabilidad", $n->getsector());
 }
 
  public function testToString()
 {
	 $nm = $this->crear("Fulano","Detal",123,2000);
	 $this->assertEquals("FulanoDetal 123 2000", $nm);	
	 }


 public function testsectordevolvernoespecificado()
 {
     $no = $this->crear();
     $this->assertEquals("No Especificado",$no->getSector());
 }
 }