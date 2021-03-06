<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(ClientTableSeeder::class);
         $this->call(RoomTableSeeder::class);
         $this->call(ReservationTableSeeder::class);
         $this->call(DetailroomTableSeeder::class);
         $this->call(StatusTableSeeder::class);
         $this->call(DetailstatusTableSeeder::class);
    }
}
