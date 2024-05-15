<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

// class RoleSeeder extends Seeder
// {
//     public function run()
//     {
//         $role1 = Role::create(['name' => 'Admin']);
//         $role2 = Role::create(['name' => 'Blogger']);

//         $permissions = [
//             ['name' => 'admin.home'],
//             ['name' => 'admin.users.index'],
//             ['name' => 'admin.users.edit'],
//             ['name' => 'admin.categories.index'],
//             ['name' => 'admin.categories.create'],
//             ['name' => 'admin.categories.edit'],
//             ['name' => 'admin.categories.destroy'],
//             ['name' => 'admin.tags.index'],
//             ['name' => 'admin.tags.create'],
//             ['name' => 'admin.tags.edit'],
//             ['name' => 'admin.tags.destroy'],
//             ['name' => 'admin.posts.index'],
//             ['name' => 'admin.posts.create'],
//             ['name' => 'admin.posts.edit'],
//             ['name' => 'admin.posts.destroy'],
//         ];

//         foreach ($permissions as $permission) {
//             Permission::create($permission);
//         }
//     }
//}
