@extends('adminlte::page')

@section('title', 'Editar Carrusel')

@section('content_header')
    <h1>Editar Carrusel</h1>
<br>
<a href="{{url('/dashboard')}}"><button class="btn btn-secondary">Volver</button></a>
    <a href="{{ route('datoscertificaciones.create')}}"><button class="btn btn-success">Agregar</button></a>
@stop

@section('content')

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Descripcion</th>
            <th>Url de la Imagen</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($banner as $banne)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$banne->titulo}}</td>
            <td><img src="{{ asset('storage'). '/' . $banne->url_img}}" width="25%" class="img-thumbnail" alt="Imagen del cliente"></td>

            <td>
                <a href="{{route('datoscertificaciones.edit', $banne->id )}}"><button
                        class="btn btn-sm btn-primary">Editar</button></a>
                <form method="post" action="{{ url('datoscertificaciones/'. $banne->id)}}">
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