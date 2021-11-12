<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'cedula' => '23827298',
            'name' => 'Karen Milena',
            'lastname' => 'Chacón Celis',
            'email' => 'kmchacon006@gmail.com',
            'direccion' => 'barrio obrero',
            'telefono' => '04161444500',
            'password' => bcrypt ('salomilenac1'),
            'fechaingreso' => '2020-10-05',
            'role' => '0'
            
        ]);
    }
}
