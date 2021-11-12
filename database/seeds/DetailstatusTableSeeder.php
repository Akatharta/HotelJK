<?php

use Illuminate\Database\Seeder;
use App\Detailstatus;

class DetailstatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detailstatus::create([

            'room_id' => '3',
            'status_id' => '2',
            'fechaingreso' => '2021-10-27',
            'fechasalida' => '2021-10-28',

            
        ]);
        Detailstatus::create([

            'room_id' => '4',
            'status_id' => '2',
            'fechaingreso' => '2021-10-27',
            'fechasalida' => '2021-10-28',

            
        ]);
        Detailstatus::create([

            'room_id' => '1',
            'status_id' => '4',
            'fechaingreso' => '2021-10-27',
            'fechasalida' => '2021-10-28',

            
        ]);
        Detailstatus::create([

            'room_id' => '2',
            'status_id' => '1',
            'fechaingreso' => '2021-10-27',
            'fechasalida' => '2021-10-28',

            
        ]);
        Detailstatus::create([

            'room_id' => '5',
            'status_id' => '1',
            'fechaingreso' => '2021-10-27',
            'fechasalida' => '2021-10-28',

            
        ]);


    }
}
