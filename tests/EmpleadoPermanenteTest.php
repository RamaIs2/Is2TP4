<?php
require_once 'EmpleadoTest.php';
class EmpleadoPermanenteTest extends EmpleadoTest
{ 
public function crear($nombre = "Fulano", $apellido = "Detal", $dni = 123, $salario = 2000,\Datetime $fechaingreso = null)
	{
        $empp = new \App\EmpleadoPermanente($nombre,$apellido,$dni,$salario,$fechaingreso);
	    return $empp;
	}
 public function testRetornarlaFechadeIngreso() {
        $fechaIngreso = new DateTime('2017-07-14');
        $c = $this->crear("Fulano", "Detal", 123, 2000, $fechaIngreso);
        $this->assertEquals('2017-07-14', $c->getfechaIngreso()->format("Y-m-d"));
 }
     public function testCalculaComision() {
        $fechaIngreso = new DateTime('2017-07-14');
        $c = $this->crear("Fulano", "Detal", 123, 2000, $fechaIngreso);
        $fechaActual = new DateTime();
        $antiguedad = $fechaActual->diff($fechaIngreso);
        $this->assertEquals($antiguedad->y, $c->calcularAntiguedad());
        $this->assertEquals("{$antiguedad->y}%", $c->calcularComision());

     }
	 		
    public function testCalcularlanAntiguedad() {
         $fechaIngreso = new DateTime('2017-07-14');
         $c = $this->crear("Fulano", "Detal", 123, 2000, $fechaIngreso);
         $fechaActual = new DateTime();
         $antiguedad = $fechaActual->diff($fechaIngreso);
        $this->assertEquals($antiguedad->y, $c->calcularAntiguedad());
     }
       public function testAntiguedadConDiacero()
     {
       $fechaIngreso = new DateTime();
       $c = $this->crear("Fulano", "Detal", 123, 2000, $fechaIngreso);
       $fechaActual = new DateTime();
       $antiguedad = $fechaActual->diff($fechaIngreso);
       $this->assertEquals($antiguedad->y, $c->calcularAntiguedad());
       $this->assertEquals("0%", $c->calcularComision());
     }

       public function testAntiguedadFechaFutura()
     {
        $this->expectException(\Exception::class);
        $fechaIngreso = new DateTime('2023-05-05');
        $fe = $this->crear("Fulano", "Detal", 123, 2000, $fechaIngreso);
        $fechaActual = new DateTime();
        $antiguedad = $fechaActual->diff($fechaIngreso);
     }

       public function testCalcularIngresoTotal() 
     {
        $antiguedad = 20;
        $ing = $this->crear("Fulano", "Detal", 123, 2000 + $antiguedad);
        $this->assertEquals(2020, $ing->calcularIngresoTotal());
     }
 }

