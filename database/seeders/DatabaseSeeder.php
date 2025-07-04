<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            MenuSeeder::class,
            PermissionSeeder::class,
        ]);

        // Seeder user untuk setiap role
        \App\Models\User::factory()->create([
            'name' => 'Superadmin',
            'username' => 'superadmin',
            'email' => 'superadmin@example.com',
            'password' => bcrypt('1234qwer'),
        ])->roles()->attach(\App\Models\Role::where('name', 'Superadmin')->first());

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('1234qwer'),
        ])->roles()->attach(\App\Models\Role::where('name', 'Admin')->first());

        \App\Models\User::factory()->create([
            'name' => 'User',
            'username' => 'user',
            'email' => 'user@example.com',
            'password' => bcrypt('1234qwer'),
        ])->roles()->attach(\App\Models\Role::where('name', 'User')->first());
    }
}
