<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
        ])->assignRole('admin');
        User::factory(7)->create();
    }
}
