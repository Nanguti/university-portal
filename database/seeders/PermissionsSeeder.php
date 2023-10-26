<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        $arrayOfPermissionNames = [

            'view roles',
            'create roles',
            'delete roles',
            'edit roles',
            'view roles details',
            'restore roles',

            'view permissions',
            'create permissions',
            'delete permissions',
            'edit permissions',
            'view permissions details',
            'restore permissions',


            'view awards',
            'create awards',
            'delete awards',
            'edit awards',
            'view awards details',
            'restore awards',

            'view batches',
            'create batches',
            'delete batches',
            'edit batches',
            'view batches details',
            'restore batches',

            'view Coursess',
            'create Coursess',
            'delete Coursess',
            'edit Coursess',
            'view Coursess details',
            'restore Coursess',

            'view grades',
            'create grades',
            'delete grades',
            'edit grades',
            'view grades details',
            'restore grades',

            'view marks',
            'create marks',
            'delete marks',
            'edit marks',
            'view marks details',
            'restore marks',

            'view students',
            'create students',
            'delete students',
            'edit students',
            'view students details',
            'restore students',

            'view users',
            'create users',
            'delete users',
            'edit users',
            'view users details',
            'restore users',           
        ];
        $permissions = collect($arrayOfPermissionNames)->map(function ($permission) {
            return ['name' => $permission, 'guard_name' => 'web'];
        });

        Permission::insert($permissions->toArray());
        
    }
}
