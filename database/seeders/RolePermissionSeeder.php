<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Create Roles
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleSupperAdmin = Role::create(['name' => 'supperadmin']);

        //Permission list
        $permissions =[

            [ 
                'group_name'=>'dashboard',
                'permissions'=>[
                    'dashboard.view',
                    'dashboard.edit',
                    ]
             ],

            [ 
                'group_name'=>'role',
                'permissions'=>[
                    // Role Permission
                    'role.create',
                    'role.view',
                    'role.edit',
                    'role.delete',
                    ]
             ],

            [ 
                'group_name'=>'client_entry',
                'permissions'=>[
                     // Client Entry Permission
                    'client_entry.create',
                    'client_entry.edit',
                    'client_entry.view',
                    'client_entry.delete',
                    ]
             ],

            [ 
                'group_name'=>'softare',
                'permissions'=>[
                    // Software softare Permission
                    'softare.create',
                    'softare.edit',
                    'softare.delete',

             ]
             ],

        ];
        for($i=0;$i<count( $permissions); $i++){
        	//create Permission
            $permissionGroup = $permissions[$i]['group_name'];
            for ($j=0; $j < count( $permissions[$i]['permissions']) ; $j++) { 
                 $permission = Permission::create(['name' =>$permissions[$i]['permissions'][$j],'group_name'=>$permissionGroup]);
                 $roleSupperAdmin->givePermissionTo($permission);
                 $permission->assignRole($roleSupperAdmin);
            }

        }
    }
}
