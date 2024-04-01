<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

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
        Permission::create(['name' => 'statistics report'])->assignRole($admin);
        Permission::create(['name' => 'graph report'])->assignRole($admin);

        Permission::create(['name' => 'student dashboard'])->assignRole($student);
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456789')
        ]);
        $user->assignRole('admin');
    }
}
