@extends('adminlte::page')

@section('title', 'Editar Carrusel')

@section('content_header')
    <h1>Agregar un nuevo servicio</h1>
<br>
<a href="{{url('/dashboard')}}"><button class="btn btn-secondary">Volver</button></a>
    <a href="{{ route('datostbservicios.create')}}"><button class="btn btn-success">Agregar</button></a>
@stop

@section('content')

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Categoria</th>
            <th>Icono</th>
            <th>Descripción 1</th>
            <th>Descripción 2</th>
            <th>Descripción 3</th>
            <th>Descripción 4</th>
            <th>Descripción 5</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($datotbservicio as $banne)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$banne->categoria}}</td>
            <td><img src="{{ asset('storage'). '/' . $banne->url_img}}" width="100%" class="img-thumbnail" alt="Imagen del cliente"></td>
            <td>{{$banne->servicio1}}</td>
            <td>{{$banne->servicio2}}</td>
            <td>{{$banne->servicio3}}</td>
            <td>{{$banne->servicio4}}</td>
            <td>{{$banne->servicio5}}</td>
            <td>
                <a href="{{route('datostbservicios.edit', $banne->id )}}"><button
                        class="btn btn-sm btn-primary">Editar</button></a>
                <form method="post" action="{{ url('datostbservicios/'. $banne->id)}}">
                    {{csrf_field() }}
                    {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-sm btn-secondary"
                        onclick="return confirm('¿Borrar?');">Borrar</button>

                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop