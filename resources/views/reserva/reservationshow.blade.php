@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Información de Reserva</div>
            <div class="panel-body">
                 @if (session('notification'))
                    <div class="alert alert-success">
                        {{ session('notification')}}
                    </div>
                @endif
                <div class="table-responsive">
                <div class="form-group">
                        <label for="title"> Reserva #: {{ $reserva -> id}} </label>
                </div>
                <div class="form-group">
                        <label for="title"> Habitación #: {{ $habitacion -> habitacion}} </label>
                </div>
                <div class="form-group">
                        <label for="title"> Descripcion: {{ $habitacion -> descripcion}} </label>
                </div>
                <div class="form-group">
                        <label for="title"> Cliente: {{ $cliente->nombre}} {{ $cliente->apellido}}</label>
                </div>
                <div class="form-group">
                        <label for="title"> Fecha de Reserva: {{ $reserva->nombre}} </label>
                </div>
                </div>
        </div>     
    </div>


@endsection