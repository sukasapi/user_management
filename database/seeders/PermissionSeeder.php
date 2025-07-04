<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Menu;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = Menu::all();
        $actions = ['create', 'read', 'update', 'delete'];
        foreach ($menus as $menu) {
            foreach ($actions as $action) {
                Permission::create([
                    'name' => ucfirst($action) . ' ' . $menu->name,
                    'slug' => $action . '-' . $menu->slug,
                    'menu_id' => $menu->id,
                    'description' => 'Izin ' . $action . ' untuk menu ' . $menu->name,
                ]);
            }
        }
    }
}
