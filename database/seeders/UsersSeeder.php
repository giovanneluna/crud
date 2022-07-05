<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([           
            'name' => 'Giovanne L',
            'password' => bcrypt('senhalegal'),
            'email' => 'gikaluna@gmail.com',
            'cpf' => '17754213658',
            'username' => 'qualquercoisa',
            'age' => '18'
        ]);
    }
    
}
