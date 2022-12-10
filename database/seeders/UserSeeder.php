<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Mehmood Khalil',
            'email' => 'superadmin@demo.com',
            'password' => bcrypt('superadmin1234'),
        ]);
        $user->assignRole('Super Admin');

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@demo.com',
            'password' => bcrypt('admin1234'),
        ]);
        $admin->assignRole('Admin');


    }
}
