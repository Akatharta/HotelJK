@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Informacion Habitacion</div>
            <div class="panel-body">
            @if (session('notification'))
                    <div class="alert alert-success">
                    {{ session('notification')}}
                    </div>
                @endif
                <form action="/editarhabitacion/{{$estados->id}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                            <label for="title"> Habitacion: {{ $habitaciones->descripcion}} Número: {{ $habitaciones->habitacion}}</label>
                    </div>
                    <div class="form-group">
                            <label for="title"> Estado: {{ $estados->status}} </label>
                    </div>
                    <div class="form-group">
                            <label for="title"> Modificar Estado:</label>
                            <select class="form-control" name="status" >
                            <option value=""> Seleccione</option>
                                <option value="disponible"> Disponible</option>
                                <option value="ocupado"> Ocupado</option>
                                <option value="mantenimiento"> En Mantenimiento</option>
                            </select>
                        </div>
                    @if($reserva2)
                        <div class="form-group">
                                <label for="title"> Fecha de la Reserva: {{ $reserva->fechareserva}} </label>
                        </div>
                        <div class="form-group">
                                <label for="title"> Fecha de Ingreso y salida: {{ $reserva->fechaingreso}} al {{ $reserva->fechasalida}} </label>
                        </div>
                        <div class="form-group">
                                <label for="title"> Cliente: {{ $cliente->nombre}} {{ $cliente->apellido}} </label>
                        </div>
                        <div class="form-group">
                                <label for="title"> Cédula: {{ $cliente->cedula}}  </label>
                        </div>
                    @endif
                    <button type="submit" class="btn btn-primary">Guardar</button>

                </form>
        </div>     
    </div>


@endsection