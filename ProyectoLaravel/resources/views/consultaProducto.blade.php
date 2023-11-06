@extends('layouts.plantilla')

@section('titulo', 'Consultar Producto')

@section('contenido')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="noSerie">No. Serie:</label>
                <input type="text" class="form-control" id="noSerie" placeholder="Ingrese el número de serie">
            </div>
        </div>
        <div class="col-md-6">
            <button class="btn btn-primary" id="consultarBtn">Consultar</button>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Editar</th>
                        <th>No. Serie</th>
                        <th>Costo</th>
                        <th>Cantidad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="text" class="form-control" id="editarNoSerie">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="editarCosto">
                        </td>
                        <td>
                            <input type="text" class="form-control" id="editarCantidad">
                        </td>
                        <td>
                            <button class="btn btn-info">Editar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <button class="btn btn-success">Generar Reporte</button>
        </div>
    </div>
</div>


@endsection
