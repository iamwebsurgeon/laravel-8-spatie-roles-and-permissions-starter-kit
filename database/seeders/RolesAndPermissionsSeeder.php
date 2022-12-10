<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'list-roles']);
        Permission::create(['name' => 'create-role']);
        Permission::create(['name' => 'show-role']);
        Permission::create(['name' => 'update-role']);
        Permission::create(['name' => 'delete-role']);

        Permission::create(['name' => 'list-users']);
        Permission::create(['name' => 'create-user']);
        Permission::create(['name' => 'show-user']);
        Permission::create(['name' => 'update-user']);
        Permission::create(['name' => 'delete-user']);

        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => 'Super Admin']);
        $role->givePermissionTo(Permission::all());

        // or may be done by chaining
        $role = Role::create(['name' => 'Admin'])
            ->givePermissionTo(['list-users', 'create-user', 'show-user', 'update-user' , 'delete-user']);


    }
}
