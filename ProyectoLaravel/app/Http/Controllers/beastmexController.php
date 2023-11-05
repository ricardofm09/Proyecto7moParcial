<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorRegBeastmex;

class beastmexController extends Controller
{
    public function metodoWelcome(){
        return view('welcome');
    }
    
}
