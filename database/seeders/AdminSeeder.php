<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Claudio',
            'email' => 'claudiotf@gmail.com',
            'password' => Hash::make('import.tambemNaoTenhoIdeia'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::create([
            'name' => 'Eduardo',
            'email' => 'eduardoluz@gmail.com',
            'password' => Hash::make('import.naoTenhoIdeia'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
