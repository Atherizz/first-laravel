<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            'email' => 'saveroathallah86@gmail.com',
            'name' => 'Savero Athallah',
            'username' => 'Atherizz',
            'password' => Hash::make('admin123'),
            'is_admin' => true,
            'remember_token' => Str::random(60)
        ]);
        User::factory(4)->create();
    }
}
