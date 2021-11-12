<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        return view('cliente.createclient');
    }

    public function storeclient(Request $request)
    { 
        $rules = [
            'cedula' => 'required|max:255',
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255|'
            ];
    
            $messages = [
                'cedula.required' => 'es necesario ingresar la cedula',
                'nombre.required' => 'es necesario ingresar el nombre',
                'nombre.max' => 'el nombre es demasiado extenso',
                'apellido.max' => 'el apellido es demasiado extenso',
                'apellido.required' => 'es necesario ingresar el apellido',
                 
            ];
        $this->validate($request,$rules,$messages);
        $cliente = new Client();
        
        $cedula = $request->input('cedula');
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $direccion = $request->input('direccion');
        $telefono = $request->input('telefono');

        if($cedula)
        $cliente->cedula=$cedula;
        if($nombre)
        $cliente->nombre=$nombre;
        if($apellido)
        $cliente->apellido=$apellido;
        if($direccion)
        $cliente->direccion=$direccion;
        else
        $cliente->direccion='sin direccion';
        if($telefono)
        $cliente->telefono=$telefono;
        else
        $cliente->direccion='sin telefono';

        $cliente->save();
        $habitaciones = DB::table('rooms')->get();
        $clientes = $cliente;

        return back()->with('notification','Cliente registrado exitosamente');
    
       
      //return 'hola'; 
    }
}
