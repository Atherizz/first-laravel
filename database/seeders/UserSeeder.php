<?php

namespace Database\Seeders;

use App\Models\User;
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
            'password' => Hash::make('admin123')
        ]);
        User::factory(4)->create();
    }
}
