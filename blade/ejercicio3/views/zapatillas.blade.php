<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@include('tienda',['nombreTienda'=>'ZAPAPLUS'])
<table>
    <tr>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Tipo</th>
        <th>Precio</th>
    </tr>
    @foreach($zapatillas as $zapatilla)
        <tr>
            <td>{{$zapatilla->getMarca()}}</td>
            <td>{{$zapatilla->getModelo()}}</td>
            <td>{{$zapatilla->getTipo()}}</td>
            <td>{{$zapatilla->getPrecio()}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
