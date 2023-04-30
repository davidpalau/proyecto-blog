<?php

namespace Database\Seeders;

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
        User::create([
            'name' => 'David Palau Morant',
            'email' => 'palau.david@hotmail.com',
            'password' => bcrypt('20019020.g')
        ]);
        User::factory(99)->create();
    }
}
