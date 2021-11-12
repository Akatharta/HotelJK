@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Crear Usuario</div>
            <div class="panel-body">
                @if (session('notification'))
                    <div class="alert alert-success">
                    {{ session('notification')}}
                    </div>
                @endif
               
            <form action="/crearusuario" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                        <label for="title"> Email:</label>
                        <input type="email" class="form-control" name="email" >
                    </div>
                    <div class="form-group">
                        <label for="title"> Cedula:</label>
                        <input type="text" class="form-control" name="cedula" >
                    </div>
                    <div class="form-group">
                        <label for="title"> Nombre:</label>
                        <input type="text" class="form-control" name="name" >
                    </div>

                    <div class="form-group">
                        <label for="title"> Apellido:</label>
                        <input type="text" class="form-control" name="lastname" >
                    </div>

                    <div class="form-group">
                        <label for="title"> Dirección:</label>
                        <input type="text" class="form-control" name="direccion" >
                    </div>
                    <div class="form-group">
                        <label for="title"> Telefono:</label>
                        <input type="text" class="form-control" name="telefono" >
                    </div>
                    <div class="form-group">
                        <label for="title"> Fecha de Ingreso:</label>
                        <input type="date" class="form-control" name="fecha">
                    </div>
                    <div class="form-group">
                        <label for="title"> Rol de usuario:</label>
                        <select class="form-control" name="role" >
                        <option value=""> Seleccione</option>
                            <option value="admin"> Administrador</option>
                            <option value="recep"> Recepcionista</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Contraseña:</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar</button>

                </form>
        </div>     
    </div>


@endsection