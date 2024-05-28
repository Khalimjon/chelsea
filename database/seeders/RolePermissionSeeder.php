<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create or find roles
        $blogger = Role::firstOrCreate(['name' => 'blogger']);
        $admin = Role::firstOrCreate(['name' => 'admin']);

        // Create or find permissions
        $editNewsPermission = Permission::firstOrCreate(['name' => 'update news']);
        $deleteNewsPermission = Permission::firstOrCreate(['name' => 'delete news']);

        // Assign permissions to roles
        $admin->syncPermissions([$editNewsPermission, $deleteNewsPermission]);
        $blogger->syncPermissions([$editNewsPermission]);

        // Find user and assign blogger role
        $user = User::firstOrCreate([
            'email' => 'blogger@example.com',
        ], [
            'name' => 'Blogger',
            'password' => bcrypt('password'), // or any default password
        ]);

        // Assign role to user
        $user->assignRole('blogger');
    }
}
