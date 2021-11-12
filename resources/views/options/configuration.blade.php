@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Sección de Configuración</div>
            <div class="panel-body">
                <form action="/configuracion" method="POST">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title"> Nombre: {{ Auth::user()->name}}</label>
                    </div>
                    <div class="form-group">
                        <label for="title"> Apellido: {{ Auth::user()->lastname}}</label>
                    </div>
                    <div class="form-group">
                        <label for="title"> Correo: {{ Auth::user()->email}}</label>
                    </div>
                    <div class="form-group">
                        <label for="title"> Dirección:</label>
                        <input type="text" class="form-control" name="direccion" placeholder='{{ Auth::user()->direccion}}'>
                    </div>
                    <div class="form-group">
                        <label for="title"> Telefono:</label>
                        <input type="text" class="form-control" name="telefono" placeholder='{{ Auth::user()->telefono}}'>
                    </div>
                    <div class="form-group">
                        <label for="title">Cambiar Contraseña:</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>


               
                </form>
            </div>         
        </div>
    </div>


@endsection