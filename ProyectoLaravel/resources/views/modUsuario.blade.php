@extends('layouts.plantilla')

@section('titulo', 'Modificar Usuario')

@section('contenido')
<div class="container mt-5 col-md-6">
    <div class="card text-center text-white bg-primary mb-3">
        <div class="card-header">
            <h1 class="display-4">Modificar Usuario</h1>
        </div>

        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label class="form-label">Nombre:</label>
                    <input type="text" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Correo:</label>
                    <input type="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Puesto:</label>
                    <input type="text" class="form-control">
                </div>

                <button type="submit" class="btn btn-light">Guardar Cambios</button>
            </form>
        </div>
    </div>
</div>
@endsection