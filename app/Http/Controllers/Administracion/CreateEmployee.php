<?php

namespace App\Http\Controllers\Administracion;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class CreateEmployee extends Controller
{
    public function index()
    {  

        $employees = DB::table('users')->get();
        
        return view('administracion.employee')->with('employees',$employees);
    }

    public function editusuario($id)
    {  

        $user = User::find($id);
        
        return view('administracion.editemployee')->with('user',$user);
    }

    public function updateusuario($id,Request $request)
    {  
        $user = User::find($id);

        $rules = [
            'cedula' => 'max:255',
            'name' => 'max:255',
            'email' => 'email|max:255|unique:users',
            'password' => 'min:6',
            ];
    
            $messages = [
                'name.max' => 'el nombre es demasiado extenso',
                'email.email' => 'el email ingresado es invalido',
                'email.max' => 'el email es muy extenso',
                'email.unique' => 'este email ya se encuentra en uso',
                'password.min' => 'la contraseña debe tener minimo 6 caracteres',
    
            ];
        
        $email = $request->input('email');
        $cedula = $request->input('cedula');
        $name = $request->input('name');
        $lastname = $request->input('lastname');
        $direccion = $request->input('direccion');
        $telefono = $request->input('telefono');
        $fechaingreso = $request->input('fecha');
        $role = $request->input('role');
        $password = $request->input('password');

        if($cedula)
        $user->cedula=$cedula;
        if($name)
        $user->name=$name;
        if($lastname)
        $user->lastname=$lastname;
        if($direccion)
        $user->direccion=$direccion;
        if($telefono)
        $user->telefono=$telefono;
        if($fechaingreso)
        $user->fechaingreso=$fechaingreso;
        if($role){ 
            if($role=="admin")
            $user->role=0;
            if($role=="recep")
            $user->role=1;
        }
        if($password)
        $user->password=$password;

        $user->save(); 
        return back()->with('notification','Usuario modificado exitosamente');
    }

    public function createusuario()
    {  
        return view('administracion.createemployee');
    }

    public function storeusuario(Request $request)
    {   
        $rules = [
        'cedula' => 'required|max:255',
        'name' => 'required|max:255',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|min:6',
        ];

        $messages = [
            'cedula.required' => 'es necesario ingresar su cedula',
            'name.required' => 'es necesario ingresar el nombre',
            'name.max' => 'el nombre es demasiado extenso',
            'email.required' => 'es necesario ingresar su correo',
            'email.email' => 'el email ingresado es invalido',
            'email.max' => 'el email es muy extenso',
            'email.unique' => 'este email ya se encuentra en uso',
            'password.required' => 'la contraseña es requerida',
            'password.min' => 'la contraseña debe tener minimo 6 caracteres',

        ];
        
        $this->validate($request,$rules,$messages);

        $user = new User();

        $email = $request->input('email');
        $cedula = $request->input('cedula');
        $name = $request->input('name');
        $lastname = $request->input('lastname');
        $direccion = $request->input('direccion');
        $telefono = $request->input('telefono');
        $fechaingreso = $request->input('fecha');
        $role = $request->input('role');
        $password = $request->input('password');

        if($email)
        $user->email=$email;
        if($cedula)
        $user->cedula=$cedula;
        if($name)
        $user->name=$name;
        if($lastname)
        $user->lastname=$lastname;
        if($direccion)
        $user->direccion=$direccion;
        if($telefono)
        $user->telefono=$telefono;
        if($fechaingreso)
        $user->fechaingreso=$fechaingreso;
        if($password)
        $user->password=$password;
        if($role=="admin")
        $user->role=0;
        if($role=="recep")
        $user->role=1;
        

        $user->save();
        //return $user;
        return back()->with('notification','Usuario registrado exitosamente');
    }
}
