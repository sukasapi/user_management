<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dashboard = Menu::create([
            'name' => 'Dashboard',
            'slug' => 'dashboard',
            'icon' => 'home',
            'url' => '/dashboard',
            'order' => 1,
        ]);
        $userMgmt = Menu::create([
            'name' => 'User Management',
            'slug' => 'user-management',
            'icon' => 'users',
            'order' => 2,
        ]);
        Menu::create([
            'name' => 'User List',
            'slug' => 'user-list',
            'icon' => 'user',
            'url' => '/users',
            'parent_id' => $userMgmt->id,
            'order' => 1,
        ]);
        Menu::create([
            'name' => 'Role Management',
            'slug' => 'role-management',
            'icon' => 'shield',
            'url' => '/roles',
            'parent_id' => $userMgmt->id,
            'order' => 2,
        ]);
        Menu::create([
            'name' => 'Menu Management',
            'slug' => 'menu-management',
            'icon' => 'menu',
            'url' => '/menus',
            'parent_id' => $userMgmt->id,
            'order' => 3,
        ]);
    }
}
