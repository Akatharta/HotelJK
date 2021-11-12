<?php

use Illuminate\Database\Seeder;
use App\Detailroom;

class DetailroomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detailroom::create([

            'room_id' => '1',
            'reservation_id' => '1'
            
        ]);
    }
}
