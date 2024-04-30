<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //
    public function producto(){
        $productos = Producto::all();
        return view('productos');
    }

    public function crearProducto(){
        return view('crearProducto');
    }
    
    public function guardarProducto(Request $request) {
        $nvoProducto = new Producto();
        $nvoProducto->descripcion = $request->input('descripcion');
        $nvoProducto->precio = $request->input('precio');
        $nvoProducto->estado = $request->input('stock');
        $nvoProducto->pagaIsv = $request->input('PagaIsv');
        $nvoProducto->save();

        $productos = Producto::all();

        return redirect('/productos');
    }
}











   