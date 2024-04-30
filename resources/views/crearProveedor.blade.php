<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Proveedor</title>
</head>
<body>

    <form action='{{route('Proveedor.crearProveedores')}}' method="POST"> 
        @csrf 
        <div class="form-group"> 
            <label for="color">Nombre:</label> 
            <input type="text" name="nombre" /> 
        </div> 

        <div class="form-group"> 
            <label for="metros">Fecha de registo:</label> 
            <input type="text" name="fechaRegistro" /> 
        </div> 

        <div class="form-group"> 
            <label for="tipoPropiedad">telefono:</label> 
            <input type="text" name="telefono" /> 
        </div> 
        <br> 

        <div class="form-group"> 
            <label for="tipoPropiedad">correo:</label> 
            <input type="text" name="correo" /> 
        </div> 
        <br> 

        <div class="form-group"> 
            <a href="{{route('//Proveedor.proveedores')}}" class="btn btn-warning">Volver</a> 
            <button type="submit" class="btn btn-success">Guardar</button>                         

        </div> 
    //
</body>