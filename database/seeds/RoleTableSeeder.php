<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


//        $student_perm = Permission::where('slug','take-tests')->first();
//        $marker_perm = Permission::where('slug','mark-tests')->first();
//        $admin_perm = Permission::where('slug','create-tests')->first();

//RoleTableSeeder.php
        $client_role = new Role();
        $client_role->slug = 'client';
        $client_role->name = 'Client';
        $client_role->save();
        //$student_role->permissions()->attach($student_perm);

        $staff_role = new Role();
        $staff_role->slug = 'staff';
        $staff_role->name = 'Staff';
        $staff_role->save();
       // $marker_role->permissions()->attach($marker_perm);

        $admin_role = new Role();
        $admin_role->slug = 'admin';
        $admin_role->name = 'Admin';
        $admin_role->save();
        //$admin_role->permissions()->attach($admin_perm);
    }
}
