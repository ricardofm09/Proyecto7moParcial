@extends('layouts.plantilla')

@section('titulo','Inicio')

@section('contenido')

<div class="container">
    <div class="form-background">
    <h1>Iniciar sesión</h1>
    <form>
     <input type="text" name="firstname" placeholder="Usuario">
     <br>
        <input type="text" name="lastname" placeholder="Email">
        <br><br>
        <input type="submit" value="Ingresar">
    </form>
        <p class="sign-up-divider">o inicia con</p>
    <div class="social-media">
        <ul class="social-media-icons">
        <li class="google"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
        <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
        </ul>
    </div> 
    </div>
    <div class="login">
        <p>¿Necesitas una cuenta?<a href="#">Registrarse</a></p>
    </div>
</div>

@endsection
