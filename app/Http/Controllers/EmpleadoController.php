<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    //
    public function Empleado(){
        $empleados = Empleado::all();
        return view('empleado');
    }

    public function crearProducto(){
        return view('crearEmpleado');
    }
    
    public function guardarEmpleado(Request $request) {
        $nvoEmpleado = new Empleado();
        $nvoEmpleado->nombre = $request->input('nombre');
        $nvoEmpleado->apellido = $request->input('apellido');
        $nvoEmpleado->fechaIngreso = $request->input('fechaIngreso');
        $nvoEmpleado->salario = $request->input('salario');
        $nvoEmpleado->save();

        $empleados = Empleado::all();

        return redirect('/productos');
    }


}
