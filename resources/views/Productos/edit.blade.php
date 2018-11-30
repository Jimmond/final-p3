@extends('layout.app')

@section('title', 'productos.create')


@section('content')
@include('common.errors')

<form method="POST" action="/productos/{{$producto->id}}" class="form-group col-md-6" enctype="multipart/form-data">
  {{ method_field('PUT') }}
  {{ csrf_field() }}


    <label for="nombreProducto">Nombre</label>
    <input type="text" name="nom_prod" id="nombreProducto" class="form-control" value="{{ $producto->nom_prod }}">

    {{-- <label for="precioPorCaja">precio por mayor</label>
    <input type="number"  name="prec_venta_total" class="form-control" id="precioPorCaja" >

    <label for="precioDetalle">Precio por unidad</label>
    <input type="number" name="prec_venta_unidad" class="form-control"  id="precioDetalle">

    <label for="cantidadCaja"> Cantidad de cajas </label>
    <input type="number"  name="cantidadCaja" id="cantidadCaja" class="form-control">

    <label for="cantidadPorCaja"> Cantidad por caja </label>
    <input type="number" name="cantidadPorCaja" id="cantidadPorCaja" class="form-control" >

    <label for="precioCompra"> Precio de compra </label>
    <input type="number" name="prec_compra" id="precioCompra" class="form-control" >

    <label for="fechaVencimiento"> fecha de vencimiento </label>
    <input type="date" name="fecha_venc" id="fechaVencimiento" class="form-control"> --}}

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
