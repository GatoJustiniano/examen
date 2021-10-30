@extends('home')
@section('title', 'Crear nuevo usuario' .' | Modelo C4')

@section('contenido-central')

    @include('dashboard.partials.validation-error')

    <form action="{{ route('user.store') }}" method="POST">
        @include('dashboard.user._form',['pass' => true])
    </form>

@endsection
