<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\Operations_controller;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }
    public function test_suma(): void{
        
        $instance = new Operations_controller();
        $result=$instance->suma(4,6);
        $this->assertEquals(10,$result);
    }

    public function test_esBiciesto(): void{
        $instance = new Operations_controller();
        $result = $instance->esBisiesto(2020);

        $this->assertEquals($result,"esBiciesto");
        $this->assertIsString($result);
        $this->assertIsNotBool($result);
        $this->assertIsNotNumeric($result);
        $this->assertStringContainsString("Biciesto",$result);
             
    }
    public function test_filtrarNumerosPares(): void{
        $instance = new Operations_controller();
        $arregloNumerico = array(1,2,3,4,5,6,7,8,9,10);
        $result = $instance->filtrarNumerosPares($arregloNumerico);
        $this->assertEquals($result, array(2,4,6,8,10));
        $this->assertContains(4, $result);
        $this->assertEquals(count($result), 5);
        $this->assertIsArray($result);
        $this->assertIsIterable($result);
    }
    public function test_CalcularPrecioPublico(): void{
        $instance = new Operations_controller();
        $result = $instance->CalcularPrecioPublico(100, "Alimentos");
        $this->assertEquals($result, 140);
        $this->assertIsNumeric($result);
        $this->assertGreaterThan(100,$result);
        $this->assertIsNotString($result);
        $this->assertLessThan(200,$result);
       
             
    }
    public function test_concatenarArreglos(): void{
        $instance = new Operations_controller();
        $arreglo1 = array(1,2,3,4);
        $arreglo2 = array(5,6,7,8);
        $result = $instance->concatenarArreglos($arreglo1,$arreglo2);
        $this->assertEquals($result, array(1,2,3,4,5,6,7,8));
        $this->assertIsArray($result);
        $this->assertGreaterThan(4,count($result));
        $this->assertContains(8,$result);
        $this->assertIsNotObject($result);
             
    }
    public function test_ordenarArregloNumerico(): void{
        $instance = new Operations_controller();
        $arregloNumerico = array(3,500,2,12,186,421,999,89);
        $result = $instance->ordenarArregloNumerico($arregloNumerico);
        $this->assertEquals($result[0],2);
        $this->assertContains(500, $arregloNumerico);
        $this->assertIsArray($result);
        $this->assertIsNotBool($result);
        $this->assertIsIterable($result);
    }
}
