<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = [
            [
                'name' => 'Giuseppe',
                'email' => 'giuseppe@gmail.com',
                'password' => '12345',
            ],
            [
                'name' => 'Roberto',
                'email' => 'roberto@gmail.com',
                'password' => '123456',
            ],
            [
                'name' => 'Alberto',
                'email' => 'alberto@gmail.com',
                'password' => '1234567',
            ],
            [
                'name' => 'Simone',
                'email' => 'simone@gmail.com',
                'password' => '12345678',
            ],
            [
                'name' => 'Alex',
                'email' => 'alex@gmail.com',
                'password' => '123456789',
            ],
            [
                'name' => 'Maria',
                'email' => 'maria@gmail.com',
                'password' => '12345',
            ],
            [
                'name' => 'Luca',
                'email' => 'luca@gmail.com',
                'password' => '12345',
            ],
            [
                'name' => 'Francesca',
                'email' => 'francesca@gmail.com',
                'password' => '12345',
            ],
            [
                'name' => 'Antonio',
                'email' => 'antonio@gmail.com',
                'password' => '12345',
            ],
            [
                'name' => 'Sara',
                'email' => 'sara@gmail.com',
                'password' => '12345',
            ],
            [
                'name' => 'Marco',
                'email' => 'marco@gmail.com',
                'password' => '12345',
            ],
            [
                'name' => 'Elena',
                'email' => 'elena@gmail.com',
                'password' => '12345',
            ],
            [
                'name' => 'Fabio',
                'email' => 'fabio@gmail.com',
                'password' => '12345',
            ],
            [
                'name' => 'Chiara',
                'email' => 'chiara@gmail.com',
                'password' => '12345',
            ],
            [
                'name' => 'Davide',
                'email' => 'davide@gmail.com',
                'password' => '12345',
            ]
        ];

        foreach($users as $user) {

            $newUser = new User();

            $newUser->name = $user['name'];
            $newUser->email = $user['email'];
            $newUser->password = Hash::make($user['password']);
            
            $newUser->save();
        }
    }
}
