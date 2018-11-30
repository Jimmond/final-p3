@extends('layout.app')

@section('title', 'productos')


@section('content')
<div class="container">
  <a href="/productos/create">Agregar</a>
 <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col-3">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Fecha Subida</th>
      <th scope="col">Fecha Update</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($productos as $producto)
      <tr>
        <td>{{$producto->id}}</td>
        <td>{{$producto->nom_prod}}</td>
        <td>{{$producto->created_at}}</td>
        <td>{{$producto->updated_at}}</td>
        <td><a href="/productos/{{$producto->id}}">Detalles</a></td>
        <td><a href="/productos/{{$producto->id}}/edit">Editar</a></td>

        <td>
          <form method="POST" action="/productos/{{$producto->id}}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <div class="form-group">
              <input type="submit" class="btn btn-danger" value="Eliminar"> </div> 
            </form>﻿
        </td>

      </tr>
    @endforeach
  </tbody>
</table>

</div>


@endsection
