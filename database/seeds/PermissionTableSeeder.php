<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $student_role = Role::where('slug','student')->first();
        $marker_role = Role::where('slug', 'marker')->first();
        $admin_role = Role::where('slug', 'admin')->first();

        $takeTests = new Permission();
        $takeTests->slug = 'take-tests';
        $takeTests->name = 'Take test';
        $takeTests->save();
        $takeTests->roles()->attach($student_role);

        $markTests = new Permission();
        $markTests->slug = 'mark-tests';
        $markTests->name = 'Mark Test';
        $markTests->save();
        $markTests->roles()->attach($marker_role);

        $createTests = new Permission();
        $createTests->slug = 'edit-users';
        $createTests->name = 'Edit Users';
        $createTests->save();
        $createTests->roles()->attach($admin_role);
    }
}
