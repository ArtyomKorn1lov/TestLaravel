<?php

namespace Database\Seeders;

use App\Core\ORM\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'mail@mail.ru',
            'password' => 'pass123',
        ]);
    }
}
