@extends('layout')


@section('titulo')
    <h1>Listado de zapatillas de la tienda {{$nombreTienda}}</h1>
@endsection

@section('tabla')
    <h2>Estas en Detalles del Zapato</h2>
    <table>
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Tipo</th>
            <th>Precio</th>
        </tr>
        <tr>
            <td>{{$zapato->getMarca()}}</td>
            <td>{{$zapato->getModelo()}}</td>
            <td>{{$zapato->getTipo()}}</td>
            <td>{{$zapato->getPrecio()}}</td>
            <td><a href="index.php">Volver</a></td>
        </tr>
    </table>
@endsection
