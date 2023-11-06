@extends('layouts.plantilla')

@section('titulo','Login')

@section('contenido')

<div class='container mt-5'>

<div class="card">
    <div class="card-header text-primary text-center fs-4">
      LOGIN
    </div>
    <div class="card-body">
      <form method="POST" action="/guardarRecuerdo">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Correo</label>
          <input type="number" name="txtIsbn" class="form-control" value="{{old('txtIsbn')}}">
          <p class="text-danger fst-italic"> {{$errors->first('txtIsbn')}} </p>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Contrasena</label>
            <input type="text" name="txtTitulo" class="form-control" value="{{old('txtTitulo')}}">
            <p class="text-danger fst-italic"> {{$errors->first('txtTitulo')}} </p>
        </div>
    </div>
    <div class="card-footer text-body-secondary">
      <div class="d-grid gap-2 col-6 mx-auto">
         <p>¿Necesitas una cuenta?<a href="#">Registrarse</a></p>
      </div>
      </form>  
    </div>
  </div>

</div>

@endsection
