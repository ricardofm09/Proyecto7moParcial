@extends('layouts.plantilla')

@section('titulo', 'Modificar Usuario')

@section('contenido')

<div class="container mt-5 col-md-6">
    <div class="card text-center text-white bg-primary mb-3">
        <div class="card-header">
            <h1 class="display-4">Editar Usuario</h1>
        </div>
        @if(session()->has('confirmacion'))

        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
          <strong> {{ session('confirmacion') }} </strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
        @endif
        
        <div class="card-body">
            <form method="POST" action="/guardar1">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nombre:</label>
                    <input type="txt" class="form-control">
                    <p class="text-danger fst-italic"> {{$errors->first('txtNombre')}} </p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Correo:</label>
                    <input type="email" class="form-control">
                    <p class="text-danger fst-italic"> {{$errors->first('email')}} </p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Puesto:</label>
                    <input type="txtPuesto" class="form-control">
                    <p class="text-danger fst-italic"> {{$errors->first('txtPuesto')}} </p>
                </div>

                <button type="submit" class="btn btn-light">Guardar Cambios</button>
            </form>
        </div>
    </div>
</div>
@endsection