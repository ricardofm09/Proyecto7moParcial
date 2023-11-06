@extends('layouts.plantilla')

@section('titulo','Login')

@section('contenido')

<div class='container mt-5'>

  @if(session()->has('confirmacion'))

  <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
    <strong> {{ session('confirmacion') }} </strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  
  @endif

<div class="card">
    <div class="card-header text-primary text-center fs-4">
      LOGIN
    </div>
    <div class="card-body">
      <form method="POST" action="/guardar">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Correo</label>
          <input type="text" name="txtCorreo" class="form-control" value="{{old('txtCorreo')}}">
          <p class="text-danger fst-italic"> {{$errors->first('txtCorreo')}} </p>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Contrasena</label>
            <input type="password" name="txtContrasena" class="form-control" value="{{old('txtContrasena')}}">
            <p class="text-danger fst-italic"> {{$errors->first('txtContrasena')}} </p>
        </div>
    </div>
    <div class="card-footer text-body-secondary">
      <div class="d-grid gap-2 col-6 mx-auto">
          <button class="btn btn-success" type="submit">Iniciar</button>
      </div>
      </form>  
    </div>
    <div class="card-footer text-body-secondary">
      <div class="d-grid gap-2 col-6 mx-auto">
         <p>¿Necesitas una cuenta?<a href="/regisUsuario">Registrarse</a></p>
      </div>
      </form>  
    </div>
  </div>

</div>

@endsection
