@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Listado Habitaciones Ocupadas</div>
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
                            @foreach ($ocupadas as $ocup)
                            @if($detail->room_id == $ocup->id)
                            <tr>
                                <td >{{ $ocup->id}}</td>  
                                <td >{{ $ocup->descripcion}}</td>
                                <td>{{ $status->status}}</td>
                                <td>{{ $ocup->habitacion}}</td>
                            </tr>
                            @endif
                            @endforeach
                        @endforeach
    
                    </table> 
                </div>
        </div>     
    </div>


@endsection