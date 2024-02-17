<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
            'name' => 'Mr. Montgomery Burns',
            'email' => 'mr@burns.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$5OAuttu4ZHW6/N5L0LZFzuge8FNhVKspkFr4VIUK7iTIStr3JxqTm', // 12345678
            'remember_token' => Str::random(10),
        ]);
    }
}
