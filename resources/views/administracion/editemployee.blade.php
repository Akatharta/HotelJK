@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Editar Usuario</div>
            <div class="panel-body">
            @if (session('notification'))
                    <div class="alert alert-success">
                    {{ session('notification')}}
                    </div>
                @endif
            
                <form action="/editarusuario/{{$user->id}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                        <label for="title"> Email:</label>
                        <input type="email" class="form-control" name="email" placeholder='{{ $user->email}}'>
                    </div>
                    <div class="form-group">
                        <label for="title"> Cedula:</label>
                        <input type="text" class="form-control" name="cedula" placeholder='{{ $user->cedula}}'>
                    </div>
                    <div class="form-group">
                        <label for="title"> Nombre:</label>
                        <input type="text" class="form-control" name="name" placeholder='{{ $user->name}}'>
                    </div>

                    <div class="form-group">
                        <label for="title"> Apellido:</label>
                        <input type="text" class="form-control" name="lastname" placeholder='{{ $user->lastname}}'>
                    </div>

                    <div class="form-group">
                        <label for="title"> Dirección:</label>
                        <input type="text" class="form-control" name="direccion" placeholder='{{ $user->direccion}}'>
                    </div>
                    <div class="form-group">
                        <label for="title"> Telefono:</label>
                        <input type="text" class="form-control" name="telefono" placeholder='{{ $user->telefono}}'>
                    </div>
                    <div class="form-group">
                        <label for="title"> Fecha de Ingreso:</label>
                        <input type="date" class="form-control" name="fecha" placeholder='{{ $user->fechaingreso}}'>
                    </div>
                    <div class="form-group">
                        <label for="title"> Rol de usuario:</label>
                        <select class="form-control" name="role" placeholder='{{ $user->role}}'>
                            <option> Seleccione</option>
                            <option value="admin"> Administrador</option>
                            <option value="recep"> Recepcionista</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Contraseña: <em>Ingrese si desea cambiar la contraseña</em> </label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar</button>

                </form>
        </div>     
    </div>


@endsection