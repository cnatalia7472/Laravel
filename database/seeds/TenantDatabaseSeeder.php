<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class TenantDatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->addRolesAndPermissions();
    }
    private function addRolesAndPermissions()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // Create default permissions for new tenant.
        Permission::create(['name' => 'admin.users.create']);
        Permission::create(['name' => 'admin.users.edit']);
        Permission::create(['name' => 'admin.users.delete']);

        // Create default roles for new tenant.
        $role = Role::create(['name' => 'superadmin']);
        $role->givePermissionTo(Permission::all());
    }
}
