<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use app\Models\User;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $arrayOfPermissionNames=[
            'add category', 'remove categphpory', 'add books', 'remove book', 'create user', 'delete user'
        ];
  $permissions=collect($arrayOfPermissionNames)->map(function($permission){
      return ['name'=>$permission , 'guard_name'=>'web'];
  });

  Permission::insert($permissions->toArray());
  $role = Role::create(['name'=>'admin'])->givePermissionTo($arrayOfPermissionNames);

    }
}
