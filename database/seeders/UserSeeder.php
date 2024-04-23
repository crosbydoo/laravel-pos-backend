<?php

namespace Database\Seeders;


use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create a user randomly
        User::factory(10)->create();

        // custom create user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'test123',
            'roles' => 'admin',
            'phone' => '1234567890',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),

        ]);
    }
}
