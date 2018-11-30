@extends('layout.app')

@section('title', 'productos.create')


@section('content')

@include('common.errors')


<form method="POST" action="/productos" class="form-group col-md-6">

  {{ csrf_field() }}


    <label for="nombreProducto">Nombre</label>
    <input type="text" name="nom_prod" id="nombreProducto" class="form-control" value="">

    <label for="prec_venta_total">precio por mayor</label>
    <input type="number"  name="prec_venta_total" class="form-control" id="prec_venta_total" min="120" >

    <label for="prec_venta_unidad">Precio por unidad</label>
    <input type="number" name="prec_venta_unidad" class="form-control"  id="precioDetalle" min="10">

    <label for="cantidadCaja"> Cantidad de cajas </label>
    <input type="number"  name="cantidadCaja" id="cantidadCaja" class="form-control">

    <label for="cantidadPorCaja"> Cantidad por caja </label>
    <input type="number" name="cantidadPorCaja" id="cantidadPorCaja" class="form-control" >

    <label for="prec_compra"> Precio de compra </label>
    <input type="number" name="prec_compra" id="prec_compra" class="form-control" >

    <label for="fecha_venc"> fecha de vencimiento </label>
    <input type="date" name="fecha_venc" id="fecha_venc" class="form-control">

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
