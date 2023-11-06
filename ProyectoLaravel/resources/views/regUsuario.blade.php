@extends('layouts.plantilla')

@section('titulo', 'Registro de Usuario')

@section('contenido')
<div class="container mt-5 col-md-6">
    <div class="card text-center text-white bg-primary mb-3">
        <div class="card-header">
            <h1 class="display-4">Registro de Usuario</h1>
        </div>

        <div class="card-body">
            @if(session()->has('Confirmacion'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('Confirmacion')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ $error }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endforeach
            @endif

            <form method="POST" action="/guardarUsuario">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nombre:</label>
                    <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Correo:</label>
                    <input type="email" name="correo" class="form-control" value="{{ old('correo') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Puesto:</label>
                    <input type="text" name="puesto" class="form-control" value="{{ old('puesto') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Contraseña:</label>
                    <input type="password" name="contrasena" class="form-control">
                </div>

                <button type="submit" class="btn btn-light">Registrar Usuario</button>
            </form>
        </div>
    </div>
</div>
@endsection

