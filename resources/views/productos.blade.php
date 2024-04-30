<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proveedores</title>
</head>
<body>
    
    <a href='{{route('')}}' class="btn btn-success">Crear</a>
    <br>
    <table class="table">
        <thead>
            <tr>

                <th>Id</th>
                <th>Descripcion</th>
                <th>precio</th>
                <th>stock</th>
                <th>pagaIsv</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
            <tr>
                <td>{{$producto->Id}}</td>
                <td>{{$producto->descripcion}}</td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->stock}}</td>
                <td>{{$producto->pagaIsv}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>

    <a href="">Volver</a>

</body>
</html>


