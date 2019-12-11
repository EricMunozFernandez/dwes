@extends('layout')


@section('titulo')
    <h1>Listado de zapatillas de la tienda {{$nombreTienda}}</h1>
@endsection

@section('tabla')
    <h2>Estas en la tabla de zapatos</h2>
    <table>
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Tipo</th>
            <th>Precio</th>
        </tr>
        @foreach($zapatos as $zapato)
            <tr>
                <td>{{$zapato->getMarca()}}</td>
                <td>{{$zapato->getModelo()}}</td>
                <td>{{$zapato->getTipo()}}</td>
                <td>{{$zapato->getPrecio()}}</td>
                <td><a href="index.php?id={{$zapato->getId()}}">Detalle Zapatilla</a></td>
            </tr>
        @endforeach
    </table>
@endsection
