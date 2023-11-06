@extends('layouts.plantilla')

@section('titulo', 'Registro de Producto')

@section('contenido')
<div class="container mt-5 col-md-6">
    <div class="card text-center text-white bg-primary mb-3">
        <div class="card-header">
            <h1 class="display-4">Registro de Producto</h1>
        </div>

        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label class="form-label">Nombre:</label>
                    <input type="text" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">No. Serie:</label>
                    <input type="text" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Cantidad:</label>
                    <input type="number" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto:</label>
                    <input type="file" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Costo de Compra:</label>
                    <input type="number" step="0.01" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Fecha de Ingreso:</label>
                    <input type="date" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Status:</label>
                    <select class="form-control">
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Marca:</label>
                    <input type="text" class="form-control">
                </div>

                <button type="submit" class="btn btn-light">Registrar Producto</button>
            </form>
        </div>
    </div>
</div>
@endsection