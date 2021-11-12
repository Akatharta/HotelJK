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
                        @foreach ($detailroom as $detail)
                            @foreach ($mantenimiento as $mant)
                            @if($detail->room_id == $mant->id)
                            <tr>
                                <td >{{ $mant->id}}</td>  
                                <td >{{ $mant->descripcion}}</td>
                                <td>{{ $status->status}}</td>
                                <td>{{ $mant->habitacion}}</td>
                            </tr>
                            @endif
                            @endforeach
                        @endforeach
    
                    </table> 
                </div>
        </div>     
    </div>


@endsection