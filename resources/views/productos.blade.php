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

<!--     <div class="container">
    <h1>Mantenimiento Vuelos</h1>
    <br>

    <a href= '{{route('Vuelo.agregarVuelos')}}' class="btn btn-success">Agregar Nuevo</a>
    
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>Numero Vuelo</th>
                <th>Origen</th>
                <th>Destino</th>
                <th>Numero Asientos</th>
                <th colspan="4">Acciones</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($vuelos as $vuelo)
            <tr>
                <td>{{ $vuelo->numeroVuelo }}</td>
                <td>{{ $vuelo->origen}}</td>
                <td>{{ $vuelo->destino}}</td>
                <td>{{ $vuelo->numeroAsientos}}</td>
                <td>
                    <a href='{{route('Vuelo.editarVuelos', $vuelo->numeroVuelo)}}'>Editar</a>
                </td>
                <td>
                    <a>Eliminar</a>
                </td>
                <td>
                    <a href='{{route('Vuelo.agregarAsientoVuelos')}}'>Agregar Asiento</a>
                </td>
                <td>
                    <a href='{{route('Vuelo.vueloAsientos')}}'>Ver Asientos</a>
                </td>
            </tr>
            @endforeach-->