<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\User;
use App\Room;
use App\Reservation;
use App\Client;
use App\Detailroom;
use App\Detailstatus;
use App\Status;
use Auth;

class ReservationController extends Controller
{
    public function index(Request $request)
    {  
        //$habitaciones = DB::table('rooms')->get();
        $habitaciones = DB::table('rooms')
        ->join('detailstatuses','detailstatuses.room_id','=','rooms.id')
        ->join('statuses','statuses.id','=','detailstatuses.status_id')
        ->select('rooms.id','rooms.descripcion','status_id','fechaingreso','fechasalida','statuses.status','rooms.habitacion')
        ->get();

        $cliente = trim($request->get('cedula'));
        $clientes = DB::table('clients')
            ->where('cedula',$cliente)
            ->first();

        $band = false; 
        $acti = false; 
        
        if($clientes)
            $band = true;
        
        if($cliente!=''){
            if(!DB::table('clients')->where('cedula',$cliente)->exists())
                $acti = true;
        }

        
        return view('reserva.reservation')
            ->with('habitaciones',$habitaciones)
            ->with('clientes',$clientes)
            ->with('acti',$acti)
            ->with('band',$band);
  
        //return $cliente;
        
        
    }

    public function showreserva(Request $request,$id)
    {   
        $seleccion = $request->input('seleccion');
        $fechaingreso = $request->input('fechaingreso');
        $fechasalida = $request->input('fechasalida');

        $habitacion = Room::find($seleccion);
        $habitacionval = DB::table('detailstatuses')->where('room_id',$habitacion->id)->get();

        foreach ($habitacionval as $hab)
        { 
            if( $fechaingreso >= $hab->fechaingreso &&  $fechasalida <= $hab->fechasalida){
                return back()->with('notification','Habitacion no se puede reservar');
            }
            
        }  
        
        $cliente = Client::find($id); 
        $user_id = Auth::user()->id;
        $status = DB::table('statuses')->where('status','reservado')->first();

        $reserva = new Reservation();
        $detailroom = new Detailroom();
        $detailstatus = new Detailstatus();

        $fechaactual = Carbon::now();
        $fechaactual = $fechaactual->format('Y-m-d');

        $reserva->fechareserva = $fechaactual;
        $reserva->fechaingreso = $fechaingreso;
        $reserva->fechasalida = $fechasalida;
        $reserva->client_id = $cliente->id;
        $reserva->user_id = $user_id;
        //$reserva->save();

        $detailroom->room_id = $seleccion;
        $detailroom->reservation_id = $reserva->id;
        //$detailroom->save();

        $detailstatus->room_id =$seleccion;
        $detailstatus->status_id = $status->id;
        $detailstatus->fechaingreso = $fechaingreso;
        $detailstatus->fechasalida = $fechasalida;

        //$detailstatus->save();



        return view('reserva.reservationshow')
            ->with('habitacion',$habitacion)
            ->with('cliente',$cliente)
            ->with('reserva',$reserva)
            ->with('notification','Reserva Registrada con Exito');
        //return $habitacion;
    }

    

}
