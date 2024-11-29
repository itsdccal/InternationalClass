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
        // Mendefinisikan daftar permission
        $permissions = [
            'manage news',
            'manage event',
            'manage program',
            'manage class',
        ];

        // Membuat permission jika belum ada
        foreach ($permissions as $perm) {
            Permission::firstOrCreate(['name' => $perm]);
        }

        // Membuat peran 'admin' dan menetapkan pengguna
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $adminRole->syncPermissions(Permission::all());

        // Membuat peran 'staff' dan menetapkan izin untuk peran ini
        $staffRole = Role::firstOrCreate(['name' => 'staff']);
        $staffPermissions = [
            'manage news',
            'manage event',
            'manage program',
        ];
        $staffRole->syncPermissions($staffPermissions); // Menyinkronkan izin untuk peran staff
        $staffUser = User::create([
            'name' => 'staff',
            'email' => 'staff@gmail.com',
            'password' => bcrypt('123'),
            'username' => "staff"
        ]);
        $staffUser->assignRole('staff'); // Menetapkan peran staff kepada pengguna staff

        $studentRole = Role::firstOrCreate(['name' => 'student']);
        $studentUser = User::create([
            'name' => 'student',
            'email' => 'student@gmail.com',
            'password' => bcrypt('123'),
            'username' => "student"
        ]);
        $studentUser->assignRole('student'); // Menetapkan peran student kepada pengguna student
    }
}
