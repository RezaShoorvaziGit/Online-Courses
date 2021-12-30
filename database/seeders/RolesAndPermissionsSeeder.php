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
               // Permission::create(['name' => 'edit articles']);
       
               $Admin = Role::create(['name' => 'Admin']);
               $Teacher = Role::create(['name' => 'Teacher']);
               $Student = Role::create(['name' => 'Student']);
            
               $QuestionRepository = Permission::create(['name' => 'AdminTeacher']);
               $QuestionRepository->syncRoles(['Admin','Teacher']);
              


    }
}
