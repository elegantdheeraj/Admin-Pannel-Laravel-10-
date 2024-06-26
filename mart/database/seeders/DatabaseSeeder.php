<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Dheeraj parajapati',
        //     'email' => 'elegant.dheeraj@gmail.com',
        //     'mobile' => '9838122252',
        //     'password' => Hash::make('test123456')
        // ]);

        DB::table('users')->insert([
            'name' => 'Dheeraj parajapati',
            'email' => 'elegant.dheeraj@gmail.com',
            'mobile' => '9838122252',
            'password' => Hash::make('test123456'),
            'role' => 1,
            'remember_token' => Str::random(10),
            'status' => 1
        ]);

        DB::table('user_roles')->insert([
            'name' => 'Super Admin',
            'code' => 101,
            'access_and_pemissions' => '{"backend":"true","Users":"true","backend/user/list":"true","backend/user/add":"true","backend/user/edit":"true","backend/user/delete/{id}":"true","backend/user/approve/{id}":"true","backend/user/roles":"true","backend/role/add":"true","backend/role/edit":"true"}',
            'status' => 1,
        ]);
        DB::table('user_roles')->insert([
            'name' => 'Admin',
            'code' => 102,
            'access_and_pemissions' => '',
            'status' => 1,
        ]);
        DB::table('role_permission')->insert([
            'name' => 'Dashboard',
            'slag' => 'backend',
            'icon' => 'bx-home-circle',
            'is_visible' => 1
        ]);
        DB::table('role_permission')->insert([
            'name' => 'Users',
            'slag' => 'Users',
            'icon' => 'bx-user',
            'is_visible' => 1
        ]);
        DB::table('role_permission')->insert([
            'name' => 'Lists',
            'slag' => 'backend/user/list',
            'parent_id' => 2,
            'sort_order' => 0,
            'is_visible' => 1
        ]);
        DB::table('role_permission')->insert([
            'name' => 'Role Permissions',
            'slag' => 'backend/user/roles',
            'parent_id' => 2,
            'sort_order' => 1,
            'is_visible' => 1
        ]);
        DB::table('role_permission')->insert([
            'name' => 'User Add',
            'slag' => 'backend/user/add',
            'parent_id' => 3,
            'sort_order' => 1,
            'is_visible' => 0
        ]);
        DB::table('role_permission')->insert([
            'name' => 'User Edit',
            'slag' => 'backend/user/edit',
            'parent_id' => 3,
            'sort_order' => 2,
            'is_visible' => 0
        ]);
        DB::table('role_permission')->insert([
            'name' => 'User delete',
            'slag' => 'backend/user/delete/{id}',
            'parent_id' => 3,
            'sort_order' => 3,
            'is_visible' => 0
        ]);
        DB::table('role_permission')->insert([
            'name' => 'User approve',
            'slag' => 'backend/user/approve/{id}',
            'parent_id' => 3,
            'sort_order' => 4,
            'is_visible' => 0
        ]);
        DB::table('role_permission')->insert([
            'name' => 'Role Add',
            'slag' => 'backend/role/add',
            'parent_id' => 4,
            'sort_order' => 1,
            'is_visible' => 0
        ]);
        DB::table('role_permission')->insert([
            'name' => 'Role Edit',
            'slag' => 'backend/role/edit',
            'parent_id' => 4,
            'sort_order' => 2,
            'is_visible' => 0
        ]);
    }
}
