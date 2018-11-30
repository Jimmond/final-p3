@extends('layout.app')

@section('title', 'empleados.create')


@section('content')

@include('common.success')
@include('common.errors')
<form action="/empleados" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" name="nom_empl" class="form-control" placeholder="Enter Nombre">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email_empl" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Telefono</label>
    <input type="number" name="tel_empl" class="form-control" placeholder="Enter Telefono">
  </div>
  <div class="form-group">
    <label for="">Cargo</label>
    <input type="text" name="cargo" value="" class="form-control">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
