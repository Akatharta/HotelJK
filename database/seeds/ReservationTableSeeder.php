<?php

use Illuminate\Database\Seeder;
use App\Reservation;

class ReservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reservation::create([

            'fechareserva' => '2021-10-27',
            'fechaingreso' => '2021-10-27',
            'fechasalida' => '2021-10-28',
            'client_id' => '1',
            'user_id' => '1'
                 
        ]);
    }
}
