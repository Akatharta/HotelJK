<?php

namespace App\Http\Controllers\rooms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Detailroom;
use App\Detailstatus;
use App\Status;
use App\Room;
class rooms extends Controller
{
    public function index(Request $request)
    {   
        $habitacion = trim($request->get('habitacion'));
        $status = DB::table('statuses')->get();
        $detailroom = DB::table('detailstatuses')->get();

    
        if($habitacion != ''){ 
            $habitaciones = DB::table('rooms')
            ->where('habitacion',$habitacion)
            ->join("detailstatuses","detailstatuses.room_id","=","rooms.id")
            ->join("statuses","statuses.id","=","detailstatuses.status_id")
            ->select("*")
            ->get();
        }
        else{
            $habitaciones = DB::table('rooms')
            ->join("detailstatuses","detailstatuses.room_id","=","rooms.id")
            ->join("statuses","statuses.id","=","detailstatuses.status_id")
            ->select("*")
            ->get();
        }

        return view('rooms.rooms')->with('habitaciones',$habitaciones)
        ->with('status',$status);

        //return $habitaciones;

    }

    public function editroom($id)
    {   
        $habitaciones = DB::table('rooms')
        ->where('id',$id)
        ->first();

        $estados = DB::table('detailstatuses')
        ->where('room_id',$habitaciones->id)
        ->join('statuses','statuses.id','=','detailstatuses.status_id')
        ->select('detailstatuses.id','room_id','status_id','fechaingreso','fechasalida','statuses.status')
        ->first(); 

        $reserva = DB::table('detailrooms')
        ->where('room_id',$habitaciones->id)
        ->join('reservations','reservations.id','=','detailrooms.reservation_id')
        ->select('*')
        ->first();

        $cliente='';
        
        if(!DB::table('detailrooms')
        ->where('room_id',$habitaciones->id)
        ->join('reservations','reservations.id','=','detailrooms.reservation_id')->exists())
        {
            $reserva2=false;
        }
        else
        {   $reserva2 = true;
            $cliente =DB::table('clients')->where('id',$reserva->client_id)
            ->first();
        }
        
        return view('rooms.roomedit')->with('habitaciones',$habitaciones)
        ->with('estados',$estados)
        ->with('reserva',$reserva)
        ->with('reserva2',$reserva2)
        ->with('cliente',$cliente);
        //return $estados;
    }

    public function updateroom(Request $request,$id)
    {
        $detailstatus = Detailstatus::find($id);
        $stat = $request->input('status');
        $status = DB::table('statuses')->where('status',$stat)
        ->first();

        $detailstatus->status_id = $status->id;
        $detailstatus->save();

        //return $detailstatus->status_id;

        return back()->with('notification','Estado Actualizado con éxito');
        
    }

}
