<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Empleado</title>
</head>
<body>

    <form action='{{route('Empleado.crearEmpleados')}}' method="POST"> 
        @csrf 
        <div class="form-group"> 
            <label for="color">Nombre:</label> 
            <input type="text" name="nombre" /> 
        </div> 

        <div class="form-group"> 
            <label for="metros">Apellido:</label> 
            <input type="text" name="apellido" /> 
        </div> 

        <div class="form-group"> 
            <label for="tipoPropiedad">fechaIngreso:</label> 
            <input type="text" name="fechaIngreso" /> 
        </div> 
        <br> 

        <div class="form-group"> 
            <label for="tipoPropiedad">salario:</label> 
            <input type="text" name="salario" /> 
        </div> 
        <br> 

        <div class="form-group"> 
            <a href="{{route('//Empleado.empleados')}}" class="btn btn-warning">Volver</a> 
            <button type="submit" class="btn btn-success">Guardar</button>                         

        </div> 
    //
</body>
</html>