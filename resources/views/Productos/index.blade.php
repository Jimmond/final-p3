@extends('layout.app')

@section('title', 'productos')


@section('content')
<div class="container">
  <button type="button" class="btn btn-primary m-3" name="button">Agregar producto</button>
 <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
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
      </tr>
    @endforeach
  </tbody>
</table>

</div>


@endsection
