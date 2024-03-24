<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Roles
        $admin = Role::create(['name' => 'admin']);
        $student = Role::create(['name' => 'student']);
        //Permissions
        Permission::create(['name' => 'banner operation'])->assignRole($admin);
        Permission::create(['name' => 'faq operation'])->assignRole($admin);
        Permission::create(['name' => 'country operation'])->assignRole($admin);
        Permission::create(['name' => 'visa operation'])->assignRole($admin);
        Permission::create(['name' => 'blog operation'])->assignRole($admin);
    }
}
