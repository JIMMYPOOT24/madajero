@extends('adminlte::page')

@section('title', 'Editar Carrusel')

@section('content_header')
    <h1>Agregar un Nuevo Proyecto</h1>
<br>
<a href="{{url('/dashboard')}}"><button class="btn btn-secondary">Volver</button></a>
    <a href="{{ route('datostbproyectos.create')}}"><button class="btn btn-success">Agregar</button></a>
@stop

@section('content')

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre del proyecto</th>
            <th>Imagen 1</th>
            <th>Imagen 2</th>
            <th>Imagen 3</th>
            <th>Imagen 4</th>
            <th>Imagen 5</th>
            <th>Imagen 6</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($datotbproyectos as $banne)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$banne->titulo}}</td>
            <td><img src="{{ asset('storage'). '/' . $banne->url_img}}" width="300px"  height= "300px" class="img-thumbnail" alt="Imagen del cliente"></td>
            <td><img src="{{ asset('storage'). '/' . $banne->url_img2}}" width="300px"  height= "300px" class="img-thumbnail" alt="Imagen del cliente"></td>
            <td><img src="{{ asset('storage'). '/' . $banne->url_img3}}" width="300px"  height= "300px" class="img-thumbnail" alt="Imagen del cliente"></td>
            <td><img src="{{ asset('storage'). '/' . $banne->url_img4}}" width="300px"  height= "300px" class="img-thumbnail" alt="Imagen del cliente"></td>
            <td><img src="{{ asset('storage'). '/' . $banne->url_img5}}" width="300px"  height= "300px" class="img-thumbnail" alt="Imagen del cliente"></td>
            <td><img src="{{ asset('storage'). '/' . $banne->url_img6}}" width="300px"  height= "300px" class="img-thumbnail" alt="Imagen del cliente"></td>

            <td>
                <a href="{{route('datostbproyectos.edit', $banne->id )}}"><button
                        class="btn btn-sm btn-primary">Editar</button></a>
                <form method="post" action="{{ url('datostbproyectos/'. $banne->id)}}">
                    {{csrf_field() }}
                    {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-sm btn-secondary"
                        onclick="return confirm('??Borrar?');">Borrar</button>

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