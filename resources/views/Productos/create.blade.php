@extends('layout.app')

@section('title', 'productos.create')


@section('content')    
    
<form method="POST" action="/productos" class="form-group col-md-6">
  {{ csrf_field() }}
 
    
    <label for="nombreProducto">Nombre</label>
    <input type="text" name="nombreProducto" id="nombreProducto" class="form-control" value="">
    
    <label for="precioPorCaja">precio por mayor</label>
    <input type="number" class="form-control" id="precioPorCaja" aria-describedby="preciocaja" placeholder="precio por caja">

    <label for="precioDetalle">Precio por unidad</label>
    <input type="number" class="form-control" id="precioDetalle">

    <label for="cantidadCaja"> Cantidad de cajas </label>
    <input type="number"  name="cantidadCaja" id="cantidadCaja" class="form-control">

    <label for="cantidadPorCaja"> Cantidad por caja </label>
    <input type="number" name="cantidadPorCaja" id="cantidadPorCaja" class="form-control" >
  
    <label for="precioCompra"> Precio de compra </label>
    <input type="number" name="precioCompra" id="precioCompra" class="form-control" >

    <label for="fechaVencimiento"> fecha de vencimiento </label>
    <input type="date" name="fechaVencimiento" id="fechaVencimiento" class="form-control">


  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection