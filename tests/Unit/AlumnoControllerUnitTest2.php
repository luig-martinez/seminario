<?php

namespace Tests\Unit;

use App\Models\Alumno;
use App\Http\Controllers\AlumnoController;
use Illuminate\Http\Request;
use Tests\TestCase;

class AlumnoControllerUnitTest2 extends TestCase
{
    
    public function test_no_permitir_menores_de_edad()
    {
        $edad = 17; 
        $this->assertFalse($edad >= 18, "La edad debe ser mayor o igual a 18.");
    }

    // Prueba con assertSame: verifica que dos valores sean idénticos (===)
    public function test_verificar_email()
    {
        $emailescrito = 'kCalix@unicah.edu';
        $emailenviado = 'kCalix@unicah.edu';
        $this->assertSame($emailescrito, $emailenviado, "El email escrito no coincide con el enviado.");
    }

    // Prueba con assertEquals: verifica que dos valores sean iguales (==)
    public function test_verificar_nombre_completo()
    {
        $nombrecompleto = 'Kevin Calix';
        $this->assertEquals('Kevin Calix', $nombrecompleto, "El nombre completo no coincide con el esperado.");
    }

    // Prueba con assertIsNumeric: verifica que un valor sea numérico
    public function test_verificar_edad_es_numero()
    {
        $edad = '20';
        $this->assertIsNumeric($edad, "La edad no es un valor numérico.");
    }
}
