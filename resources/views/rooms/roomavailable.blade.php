@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Listado Habitaciones Disponibles</div>
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
                            @foreach ($disponibles as $disp)
                            @if($detail->room_id == $disp->id)
                            <tr>
                                <td >{{ $disp->id}}</td>  
                                <td >{{ $disp->descripcion}}</td>
                                <td>{{ $status->status}}</td>
                                <td>{{ $disp->habitacion}}</td>
                            </tr>
                            @endif
                            @endforeach
                        @endforeach
    
                    </table> 
                </div>
        </div>     
    </div>


@endsection