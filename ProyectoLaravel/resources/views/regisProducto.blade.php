@extends('layouts.plantilla')

@section('titulo', 'Registro de Producto')

@section('contenido')
<div class="container mt-5 col-md-6">
    <div class="card text-center text-white bg-primary mb-3">
        <div class="card-header">
            <h1 class="display-4">Registro de Producto</h1>
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
                    <input type="txtNombre" class="form-control">
                    <p class="text-danger fst-italic"> {{$errors->first('txtNombre')}} </p>
                </div>

                <div class="mb-3">
                    <label class="form-label">No. Serie:</label>
                    <input type="txtSerie" class="form-control">
                    <p class="text-danger fst-italic"> {{$errors->first('txtSerie')}} </p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Cantidad:</label>
                    <input type="number" class="form-control">
                    <p class="text-danger fst-italic"> {{$errors->first('number')}} </p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto:</label>
                    <input type="txtfile" class="form-control">
                    <p class="text-danger fst-italic"> {{$errors->first('txtfile')}} </p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Costo de Compra:</label>
                    <input type="number" step="0.01" class="form-control">
                    <p class="text-danger fst-italic"> {{$errors->first('number')}} </p>
                </div>

                <div class="mb-3">
                    <label class="form-label">Fecha de Ingreso:</label>
                    <input type="date" class="form-control">
                    <p class="text-danger fst-italic"> {{$errors->first('date')}} </p>
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
                    <input type="txtMarca" class="form-control">
                </div>
                <p class="text-danger fst-italic"> {{$errors->first('txtMarca')}} </p>

                <button type="submit" class="btn btn-light">Registrar Producto</button>
            </form>
        </div>
    </div>
</div>
@endsection