<?php

use Illuminate\Database\Seeder;
use App\Room;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::create([
            'descripcion' => 'Habitacion Individual',
            'estado' => 'disponible',
            'habitacion'=> '11'
            
        ]);

        Room::create([
            'descripcion' => 'Habitacion Doble',
            'estado' => 'disponible',
            'habitacion'=> '13'
            
        ]);

        Room::create([
            'descripcion' => 'Habitacion Doble',
            'estado' => 'ocupada',
            'habitacion'=> '15'
            
        ]);

        Room::create([
            'descripcion' => 'Habitacion Queen',
            'estado' => 'mantenimiento',
            'habitacion'=> '20'
            
        ]);

        
        Room::create([
            'descripcion' => 'Habitacion Individual',
            'estado' => 'mantenimiento',
            'habitacion'=> '05'
            
        ]);

        Room::create([
            'descripcion' => 'Habitacion Individual',
            'estado' => 'ocupada',
            'habitacion'=> '25'
            
        ]);

        Room::create([
            'descripcion' => 'Habitacion King',
            'estado' => 'disponible',
            'habitacion'=> '40'
            
        ]);

        Room::create([
            'descripcion' => 'Habitacion doble',
            'estado' => 'disponible',
            'habitacion'=> '35'
            
        ]);
    }
}
