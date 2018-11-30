@extends('layout.app')
@section('title', 'Producto - crear')
@section('content')

  @if (session('status'))
    <div class="alert alert-success">
      {{session('status')}}
    </div>
  @endif
<table class="table table-light mt-3">
<tr class="bg-success">
  <th>nombre</th>
  <th>fecha de creacion</th>
  <th>cualquier otra cosa</th>
</tr>
<tr>
<td>{{$producto->nom_prod}}</td>
<td>{{$producto->created_at}}</td>
<td><a href="/productos/{{$producto->id}}/edit" class="btn btn-warning">editar</a></td>
</tr>
</table>
@endsection
