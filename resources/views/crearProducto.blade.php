<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Producto</title>
</head>
<body>

    <form action='{{route('Producto.guardarProductos')}}' method="POST"> 
        @csrf 
        <div class="form-group"> 
            <label for="color">Descripcion:</label> 
            <input type="text" name="descripcion" /> 
        </div> 

        <div class="form-group"> 
            <label for="metros">Precio</label> 
            <input type="text" name="precio" /> 
        </div> 

        <div class="form-group"> 
            <label for="tipoPropiedad">Stock:</label> 
            <input type="text" name="stock" /> 
        </div> 
        <br> 

        <div class="form-group"> 
            <a href="{{route('Producto.productos')}}" class="btn btn-warning">Volver</a> 
            <button type="submit" class="btn btn-success">Guardar</button>                         

        </div> 
    //
</body>
</html>

