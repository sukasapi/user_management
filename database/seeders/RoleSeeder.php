<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'Superadmin', 'description' => 'Memiliki semua akses dan dapat mengatur role/menu'],
            ['name' => 'Admin', 'description' => 'Mengelola user dan menu sesuai izin'],
            ['name' => 'User', 'description' => 'Akses fitur standar user'],
        ];
        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role['name']], $role);
        }
    }
}
