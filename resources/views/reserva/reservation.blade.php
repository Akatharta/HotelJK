@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Registro Reserva</div>
            <div class="panel-body">
                @if (session('notification'))
                    <div class="alert alert-success">
                        {{ session('notification')}}
                    </div>
                @endif
                <form action="/reservacion" method="GET">
                    <div class="form-group">
                        <label for="title"> Ingrese la Cedula:</label>
                        <input type="text" class="form-control" name="cedula">
                    </div>
                    <button type="submit" class="btn btn-default"onclick='this.acti=true'  >Buscar</button>
                </form>

                
                @if ($band)
                <div class="form-group">
                        <label for="title"> Nombre: {{ $clientes->nombre}}</label>
                </div>
                <div class="form-group">
                        <label for="title"> Apellido: {{ $clientes->apellido}}</label>
                </div>
                <div class="form-group">
                        <label for="title"> Cédula: {{ $clientes->cedula}}</label>
                </div>

                <div class="my-1">
                    <form action="{{route('showreserva',[$clientes->id])}}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title"> Ingrese la Fecha de Ingreso:</label>
                            <input type="date" class="form-control" name="fechaingreso" required>
                        </div>
                        <div class="form-group">
                            <label for="title"> Ingrese la Fecha de Salida:</label>
                            <input type="date" class="form-control" name="fechasalida" required>
                        </div>
                        
                        <div class="table-responsive">
                    <table class="table table-bordered">
                        
                        <tr>
                            <td class="active">Descripcion</td>
                            <td class="active">Estado</td>
                            <td class="active"># Habitación</td>
                            <td class="active">Fechas</td>
                            <td class="active">Seleccionar</td>
                        </tr>
                        @foreach ($habitaciones as $disp)
                        <tr>
                            <td >{{ $disp->descripcion}}</td>
                            <td>{{ $disp->status}}</td>
                            <td>{{ $disp->habitacion}}</td>
                            <td>Del {{ $disp->fechaingreso}} al {{ $disp->fechasalida}}</td>
                            <td>
                                <input type="radio"  name="seleccion" value="{{ $disp->id}}" required><span class="glyphicon glyphicon-ok"></span>
                            </td>
                        </tr>
                        @endforeach
    
                    </table>

                    

                </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>

                @endif

                @php
                    $habid=0;
                @endphp

                @if ($acti)
                 @if (!$band)
                 <div class="alert alert-danger" role="alert">Cliente no registrado</div>
                <a  class="btn btn-info" href="/registrarcliente"  >Registrar <span class="glyphicon glyphicon-user"></span></a>
                    
                 @endif
                @endif


                
        </div>     
    </div>

    <script>
     function variable($id) {
        $habid = $id;
    }
    </script>

@endsection