<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use App\Models\Alumno;
use App\Http\Controllers\AlumnoController;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Tests\TestCase;
class AlumnoControllerUnitTest extends TestCase
{
    //comprueba de que al no ingresar datos genere una excepcion
    public function test_probar_validacion_falla_para_crear_Alumnos()
    {
        //variable para el controlador, aqui se crea la instancia de dicho controlador
        $controller= new AlumnoController();
        $request=Request::create('/alumnos','POST',[
            'name' => '',//Ingresando dato vacio para comprobar la validacion de require
            'apellido' => '',
            'email' => '',
            'edad' => ''
        ]);
        $this->expectException(ValidationException::class);
        // Se espera que falle la validación
        $controller->store($request);
    }

//Prueba de que al ingresar los datos de forma correcta se ejecuta la captura de datos correctamente
    public function test_probar_validacion_correcta_para_crear_Alumnos()
    {
        //variable para el controlador, aqui se crea la instancia de dicho controlador
        $controller= new AlumnoController();
        $request=Request::create('/alumnos','POST',[
            'name' => 'Kevin',
            'apellido' => 'Calix',
            'email' => 'kCalix@unicah.edu',
            'edad' => '20'
        ]);
        $this->expectException(ValidationException::class);
        // si no se genera una excepcion la validacion sera correcta
        $response=$controller->store($request);
        $this->assertTrue($response->isRedirect(route('alumnos.index')));
    }
}
