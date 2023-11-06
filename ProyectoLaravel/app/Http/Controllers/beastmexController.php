<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorRegBeastmex;

class beastmexController extends Controller
{
    public function metodoWelcome(){
        return view('welcome');
    }

    public function metodoGuardar(validadorRegBeastmex $req){
        return redirect('/welcome')->with('guardado');
    }

    public function metodoProvedores(){
        return view('altaProvedores');
    }

    public function metodoGuardar1(validadorRegBeastmex $req){
        return redirect('/welcome')->with('guardado');
    }
    public function metodoConsultaCompra(){
        return view('consultaCompra');
    }
    public function metodoConsultaProducto(){
        return view('consultaProducto');
    }
    public function MetodoCrudUsuario(){
        return view('crudUsuario');
    }
    public function metodoEditarProducto(){
        return view('editarProducto');
    }
    public function metodoEditarUsuario(){
        return view('editarUsuario');
    }
    public function metodoAdmin(){
        return view('menuAdmin');
    }
    public function metodoOrdenCompra(){
        return view('ordenCompra');
    }
    public function metodoRegisUsuario(){
        return view('regisUsuario');
    }
    public function metodoRegisProducto(){
        return view('regisProducto');
    }
    public function metodoReporteGanancias(){
        return view('reporteGanancias');
    }
    public function metodoReporteProducto(){
        return view('reporteProducto');
    }

    public function metodoVentaCliente(){
        return view('ventaCliente');
    }

    public function metodoConsultaTickets(){
        return view('consultaTickets');
    }
}
