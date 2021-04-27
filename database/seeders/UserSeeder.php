<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'SUPER ADMIN',
            'email' => 'ajmagpantay.live',
            'password' => Hash::make('Zxasqw12'),
            'admin' => true
        ]);

        User::create([
            'name' => 'TEST',
            'email' => 'test@test.com',
            'password' => Hash::make('Zxasqw12'),
        ]);
    }
}
