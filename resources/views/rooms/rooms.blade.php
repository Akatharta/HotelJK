@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Listado Habitaciones</div>
            <div class="panel-body">
            <form action="" method="GET">
                    <div class="form-group">
                        <label for="title"> Ingrese la habitacion:</label>
                        <input type="text" class="" name="habitacion">
                        <button type="submit" class="btn btn-default "  >Buscar</button>
                    </div>
                    
                </form>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        
                        <tr>
                            <td class="active">Descripcion</td>
                            <td class="active">Estado</td>
                            <td class="active"># Habitación</td>
                            <td class="active">Fechas</td>
                            <td class="active">Editar estado</td>
                        </tr>
                        @foreach ($habitaciones as $hab)   
                            <tr>
                                <td >{{ $hab->descripcion}}</td>  
                                <td >{{ $hab->status}}</td>
                                <td >{{ $hab->habitacion}}</td>
                                <td> Del {{ $hab->fechaingreso  }} al {{ $hab->fechasalida  }}</td>
                                <td>
                                <a href="/editarhabitacion/{{ $hab->room_id}}" class="btn btn-primary" title="Editar Estado"><span class="glyphicon glyphicon-pencil"></span></a>
                            </td>
                            </tr>
                    
                        @endforeach
    
                    </table> 
                </div>
        </div>     
    </div>


@endsection