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
  <th>Venta por caja</th>
  <th>Venta por unidad</th>
  <th>precio de compra</th>
  <th>fecha de vencimiento</th>
  <th>Almacen</th>
</tr>
<tr>
<td>{{$producto->nom_prod}}</td>
<td>{{$producto->prec_venta_total}}</td>
<td>{{$producto->prec_venta_unidad}}</td>
<td>{{$producto->prec_compra}}</td>
<td>{{$producto->fecha_venc}}</td>
<td>{{$producto->stock}}</td>
<td><a href="/productos/{{$producto->id}}/edit" class="btn btn-warning">editar</a></td>
</tr>
</table>
@endsection
