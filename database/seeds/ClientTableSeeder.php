<?php

use Illuminate\Database\Seeder;
use App\Client;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([

            'cedula' => '23827298',
            'nombre' => 'Karen',
            'apellido' => 'Chacon',
            'direccion' => 'San Cristobal barrio el lobo',
            'telefono' => '04267805231'
            
            
        ]);
    }
}
