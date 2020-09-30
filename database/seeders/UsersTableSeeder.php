<?php

namespace Database\Seeders;

use Hash, Str;
use App\Models\User;
use Illuminate\Database\Seeder;

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
            'name' => 'John Smith',
            'email' => 'john_smith@gmail.com',
            'password' => Hash::make('password123'),
            'remember_token' => Str::random(60),
            'policy_number' => 'GigBOP33',
            'client_name' => 'Jewelry Gold Premium',
            'first_name' => 'John',
            'last_name' => 'Smith'
        ]);
    }
}
