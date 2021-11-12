<?php

namespace App\Http\Controllers\rooms;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Detailroom;
use App\Detailstatus;
use App\Status;
class roombusy extends Controller
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
    {   
        $status = DB::table('statuses')->where('status','ocupado')->first();
        $detailroom = DB::table('detailstatuses')->where('status_id',$status->id)->get();
        $ocupadas = DB::table('rooms')->get();
        
        return view('rooms.roombusy')->with('ocupadas',$ocupadas)
        ->with('detailroom',$detailroom)
        ->with('status',$status);
        //echo $disponibles;
    }
}
