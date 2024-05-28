<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user
        $admin = User::firstOrCreate([
            'email' => 'admin@gmail.com',
        ], [
            'name' => 'admin',
            'password' => Hash::make('12345678'),
        ]);

        // Create other users
        User::factory()->count(5)->create();

        // Ensure role exists
        $role = Role::firstOrCreate(['name' => 'admin']);

        // Assign admin role to the created admin user
        $admin->assignRole($role);
    }
}
