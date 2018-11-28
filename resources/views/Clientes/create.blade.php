@extends('layout.app')

@section('title', 'clientes.create')


@section('content')    
    <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" placeholder="Enter Nombre">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Telefono</label>
    <input type="number" class="form-control" placeholder="Enter Telefono">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection