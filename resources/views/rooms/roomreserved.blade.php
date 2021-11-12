@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Listado Habitaciones Reservadas</div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        
                        <tr>
                            <td class="active">#id</td>
                            <td class="active">Descripcion</td>
                            <td class="active">Estado</td>
                            <td class="active"># Habitación</td>
                        </tr>
                        @foreach ($detailroom as $detail)
                            @foreach ($reservada as $reserv)
                            @if($detail->room_id == $reserv->id)
                            <tr>
                                <td >{{ $reserv->id}}</td>  
                                <td >{{ $reserv->descripcion}}</td>
                                <td>{{ $status->status}}</td>
                                <td>{{ $reserv->habitacion}}</td>
                            </tr>
                            @endif
                            @endforeach
                        @endforeach
    
                    </table> 
                </div>
        </div>     
    </div>


@endsection