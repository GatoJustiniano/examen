@extends('errors::minimal')

@section('title', __('Página no encontrada'))
@section('code')


<div class="wrap">
    <h1>Oh! Error 404</h1>
    <p>Estás en el medio de la nada. La página que solicitó se movió o no existe. 
        <a href="{{ url()->previous() }}">
            <i class="fa fa-arrow-left"></i>
            Volver
        </a>  
    </p>
    <p>Lo que puedes hacer:</p>
        <ul>
            <li><a href="/">Inicio</a> Regresa al página principal.</li>
            <li><a href="/home">Tablero</a> Regresa al tablero.</li>
            <li><a href="{{ url('about-us') }}">Contacto</a> para mí si crees que esto sucedió por error.</li>
        </ul>
    
</div>
@endsection

@section('message')
<div class="wrap">
    <canvas width="560" height="312"></canvas>
</div>

@endsection

