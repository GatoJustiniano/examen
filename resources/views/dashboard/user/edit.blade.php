@extends('home')
@section('title', 'Editar usuario' .' | Modelo C4')

@section('contenido-central')

    @include('dashboard.partials.validation-error')
    @include('web.partials.btn-volver')

    <form action="{{ route('user.update',$user->id) }}" method="POST">
        @method('PUT')
        @include('dashboard.user._form',['pass' => false])
    </form>

@endsection
