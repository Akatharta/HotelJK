@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Listado de Usuarios</div>
        
        <div class="panel-body">
        <button onclick="location.href='/crearusuario'" class="btn btn-primary">Crear Usuario</button>
                <div class="table-responsive">
                    <table class="table table-bordered">
                      
                        <tr>
                            <td class="active">#id</td>
                            <td class="active">Nombre Apellido</td>
                            <td class="active">Correo</td>
                            <td class="active">Dirección</td>
                            <td class="active">Telefono</td>
                            <td class="active">Fecha Ingreso</td>
                            <td class="active">Rol</td>
                            <td class="active">Configuracion</td>
                        </tr>
                        @foreach ($employees as $empl)
                        <tr>
                            <td >{{ $empl->id}}</td>  
                            <td >{{ $empl->name}}</td>
                            <td>{{ $empl->email}}</td>
                            <td>{{ $empl->direccion}}</td>
                            <td>{{ $empl->telefono}}</td>
                            <td>{{ $empl->fechaingreso}}</td>   
                            <td>{{ $empl->role}}</td>
                            <td>
                                <a href="/editarusuario/{{ $empl->id}}" class="btn btn-primary" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a>
                                <a href="" class="btn btn-danger" title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                            </td>

                        </tr>
                        @endforeach
    
                    </table> 
                </div>
            </div>
    </div>


@endsection