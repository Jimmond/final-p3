@extends('layout.app')

@section('title', 'productos')


@section('content')
<div class="container">
  <a href="/productos/create">Agregar</a>
 <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col-3">Precio por caja</th>
      <th scope="col">Precio unidad</th>
      <th scope="col">Fecha Update</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($productos as $producto)
      <tr>

        <td>{{$producto->nom_prod}}</td>
        <td>{{$producto->prec_venta_total}}</td>
        <td>{{$producto->prec_venta_unidad}}</td>
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
