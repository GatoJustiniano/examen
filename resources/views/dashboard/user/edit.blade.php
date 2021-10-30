@extends('home')

@section('contenido-central')

@include('dashboard.partials.validation-error')

    <form action="{{ route('user.update',$user->id) }}" method="POST">
        @method('PUT')
        @include('dashboard.user._form',['pass' => false])
    </form>

@endsection
