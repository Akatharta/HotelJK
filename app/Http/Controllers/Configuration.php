<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\User;
use Auth;

class Configuration extends Controller
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

        $usuarios = DB::table('users')->get();
        
        return view('options.configuration');
    }

    public function postconfig(Request $request)
    {   $user_id = Auth::user()->id;
        
        $user = User::find($user_id);
       
        $direccion = $request->input('direccion');
        $telefono = $request->input('telefono');
        $password = $request->input('password');

        if($direccion)
        $user->direccion=$direccion;
        if($telefono)
        $user->telefono=$telefono;
        if($password)
        $user->password=bcrypt($password);

        $user->save();
        
        //return back();
        return $user;
       
    }
}
