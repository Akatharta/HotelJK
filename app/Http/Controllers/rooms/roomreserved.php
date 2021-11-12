<?php

namespace App\Http\Controllers\rooms;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Detailroom;
use App\Detailstatus;
use App\Status;
class roomreserved extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $status = DB::table('statuses')->where('status','reservado')->first();
        $detailroom = DB::table('detailstatuses')->where('status_id',$status->id)->get();
        $reservada = DB::table('rooms')->get();
        
        return view('rooms.roomreserved')->with('reservada',$reservada)
        ->with('detailroom',$detailroom)
        ->with('status',$status);
        //echo $disponibles;
    }
}
