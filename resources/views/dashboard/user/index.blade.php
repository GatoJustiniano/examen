@extends('home')

@section('title', 'Lista de Usuarios' . ' | Modelo C4')

@section('contenido-central')

    <a class="btn btn-success mt-3 mb-3" href="{{ route('user.create') }}">
        Crear
    </a>


    <table class="table table-striped table-hover">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Correo</th>
            <th scope="col">Rol</th>
            <th scope="col">Actualización</th>
            <th scope="col">Creación</th>
            <th colspan="3">&nbsp;Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->surname }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->rol->key }}</td>
                <td>{{ $user->created_at->format('Y-m-d') }}</td>
                <td>{{ $user->updated_at->format('Y-m-d') }}</td>
                
                <td style="padding: 0.75rem 3px" >
                    <a href="{{ route('user.show',$user->id) }}" class="btn btn-primary">Ver</a>
                </td>
                <td style="padding: 0.75rem 3px">
                    <a href="{{ route('user.edit',$user->id) }}" class="btn btn-primary">Editar</a>
                </td>
                
                <td style="padding: 0.75rem 3px">
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal"
                        data-id="{{ $user->id }}">
                        Eliminar
                    </button>
                </td>                    
                
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Seguro que deseas eliminar el usuario seleccionada?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                <form id="formDelete" action="{{ route('user.destroy',0) }}" method="POST" data-action="{{ route('user.destroy',0) }}" >
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>

            </div>
            </div>
        </div>
    </div>

    <script>
        window.onload = function () {
            $('#deleteModal').on('show.bs.modal', function (event) {

                var button = $(event.relatedTarget) // Button that triggered the modal
                var id = button.data('id') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

                action = $('#formDelete').attr('data-action').slice(0,-1)

                $('#formDelete').attr('action',action + id )

                var modal = $(this)
                modal.find('.modal-title').text('Vas a borrar el usuario ' + id)
                
            });
        };


    </script>

@endsection




