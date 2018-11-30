@extends('layout.app')

@section('title', 'clientes')


@section('content')
<div class="container">

<a href="/clientes/create">Registrar</a>
 <table class="table">
  <thead class="thead-dark">
    <tr>

      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Telefono</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($clientes as $cliente)
      <tr>
        <td>{{$cliente->nom_cli}}</td>
        <td>{{$cliente->email_cli}}</td>
        <td>{{$cliente->tel_cli}}</td>
        <td><a href="/clientes/{{$cliente->id}}/edit/">Editar</a></td>
        <td>
          <form class="form-group" action="clientes/{{$cliente->id}}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <div class="form-group">
              <input type="submit" class="btn btn-danger" value="Eliminar"> </div>
            </form>﻿
          </form>
        </td>
      </tr>
    @endforeach

  </tbody>
</table>

</div>


@endsection
