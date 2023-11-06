@extends('layouts.plantilla')

@section('titulo', 'Registro de Usuario')

@section('contenido')
<div class="container mt-5 col-md-6">
    <div class="card text-center text-white bg-primary mb-3">
        <div class="card-header">
            <h1 class="display-4">Registro de Usuario</h1>
        </div>

        <div class="card-body">

            @if(session()->has('confirmacion'))

            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
              <strong> {{ session('confirmacion') }} </strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            
            @endif

            <form method="POST" action="/guardar1">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nombre:</label>
                    <input type="txtNombre" name="nombre" class="form-control" value="{{ old('nombre') }}">
                    <p class="text-danger fst-italic"> {{$errors->first('txtNombre')}} </p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Correo:</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                    <p class="text-danger fst-italic"> {{$errors->first('email')}} </p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Puesto:</label>
                    <input type="txtPuesto" name="puesto" class="form-control" value="{{ old('puesto') }}">
                    <p class="text-danger fst-italic"> {{$errors->first('txtPuesto')}} </p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Contraseña:</label>
                    <input type="password" name="contrasena" class="form-control">
                    <p class="text-danger fst-italic"> {{$errors->first('password')}} </p>
                </div>

                <button type="submit" class="btn btn-light">Registrar Usuario</button>
            </form>
        </div>
    </div>
</div>
@endsection

