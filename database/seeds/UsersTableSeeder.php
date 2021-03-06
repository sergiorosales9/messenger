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
            'name' => 'juan', 
            'email' => 'juan@juan.com', 
            'password' => bcrypt('123123') 
        ]);

        User::create([
            'name' => 'sergio', 
            'email' => 'carlos@carlos.com', 
            'password' => bcrypt('123123') 
        ]); 

        User::create([
            'name' => 'diego', 
            'email' => 'diego@diego.com', 
            'password' => bcrypt('123123') 
        ]);
    }
}
