<?php

use App\Models\Empleado;
use Illuminate\Support\Facades\Route;
use App\Models\Empresa;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

pregunta.	para conocer la empresa del empleado con id 1 la sentencia seria:
a.	$empleado = Empleado->find(1); $empresa = empleado->empresa;
b.	$empleado = Empleado->find(1); $empresa = empleado::empresa;
c.	$empleado = Empleado::find(1); $empresa = $empleado->empresa;
d.	$empresa = Empleado::where(‘empresa_id’,1);

|
*/

Route::get('/', function () {
    $estado = 'contratado';
    $empleado = Empleado::find(1);
    $empresa = $empleado->empresa;
    dd($empresa);
    return view('pages.home',compact('empleados','estado'));
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('testEmpresas', function(){
   // $empresa = Empresa::where('nit','6475208')->first();
   // dd($empresa->empleados);

   $empleados = Empleado::where('nombre','like','a%')->orderBy('nombre')->get();
   dd($empleados);

});

Route::get('/empleado/{idEmpleado}', function ($idEmpleado){
    $empleado = Empleado::where('id',$idEmpleado)->get();
    dd($empleado);
});
Route::get('/empleado/codigo/{codEmpleado}', function ($codEmpleado){
    $empleado = Empleado::where('codigo',$codEmpleado)->get();
    dd($empleado);
});
Route::get('/empleado', function (){
    $empleados = Empleado::all();
    dd($empleados);
});

Route::get('saludar/{idEmpleado}',function($idEmpleado){
    $empleado = Empleado::where('id',$idEmpleado)->first();
    return view('hola')->with('empleado',$empleado);
});


Route::get('saludoEmpleados/{estado}',function($estado){
    $empleados = Empleado::where('estado',$estado)->get();
    return view('hola',compact('empleados','estado'));
    // escribir un dashboard para mostrar datos de empleados, en una tabla
});
