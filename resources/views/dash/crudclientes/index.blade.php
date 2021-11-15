@extends('adminlte::page')

@section('title', 'Editar Carrusel')

@section('content_header')
    <h1>Editar Clientes</h1>
<br>
<a href="{{url('/dashboard')}}"><button class="btn btn-secondary">Volver</button></a>
    <a href="{{ route('datostbclientes.create')}}"><button class="btn btn-success">Agregar</button></a>
@stop

@section('content')

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre del cliente</th>
            <th>Logo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($datotbclientes as $banne)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$banne->nombre_cliente}}</td>
            <td><img src="{{ asset('storage'). '/' . $banne->logo}}" width="25%" class="img-thumbnail" alt="Imagen del cliente"></td>

            <td>
                <a href="{{route('datostbclientes.edit', $banne->id )}}"><button
                        class="btn btn-sm btn-primary">Editar</button></a>
                <form method="post" action="{{ url('datostbclientes/'. $banne->id)}}">
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