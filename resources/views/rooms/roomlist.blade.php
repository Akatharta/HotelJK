@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Listado Habitaciones en Mantenimiento</div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        
                        <tr>
                            <td class="active">#id</td>
                            <td class="active">Descripcion</td>
                            <td class="active">Estado</td>
                            <td class="active"># Habitación</td>
                        </tr>
                        @foreach ($habitaciones as $hab)
                        <tr>
                            <td >{{ $hab->id}}</td>  
                            <td >{{ $hab->descripcion}}</td>
                            <td>{{ $hab->estado}}</td>
                            <td>{{ $hab->habitacion}}</td>
                        </tr>
                        @endforeach
    
                    </table> 
                </div>
        </div>     
    </div>


@endsection