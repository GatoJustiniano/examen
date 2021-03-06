@csrf

<div class="form-group">
    <label for="name">Nombre</label>
    <input class="form-control" type="text" name="name" id="name" value="{{ old('name',$user->name) }}">
</div>

<div class="form-group">
    <label for="surname">Apellido</label>
    <input class="form-control" type="text" name="surname" id="surname" value="{{ old('surname',$user->surname) }}">
</div>

<div class="form-group">
    <label for="email">Correo</label>
    <input class="form-control" type="email" name="email" id="email" value="{{ old('email',$user->email) }}">
</div>

@if ($pass)
    <div class="form-group">
        <label for="password">Contraseña</label>
        <input class="form-control" type="password" name="password" id="password" value="{{ old('password',$user->password) }}">
    </div>
@endif

<input type="submit" value="Enviar" class="btn btn-success btn-lg ">


