<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'firstname' => 'admin',
            'lastname' => 'admin',
            'phone_number' => '000000000',
            'email' => 'admin@admin',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
            'admin' => true,
            'remember_token' => Str::random(10),
        ]);
    }
}
