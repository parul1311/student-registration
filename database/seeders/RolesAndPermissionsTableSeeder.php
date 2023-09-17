<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Laratrust\Models\LaratrustPermission;
use Laratrust\Models\LaratrustRole;
use App\Models\User;

class RolesAndPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Roles
        $admin = LaratrustRole::firstOrCreate(
            [
            'name' => 'admin',
            'display_name' => 'Admin'
            ]
        );
        LaratrustRole::firstOrCreate(
            [
            'name' => 'student',
            'display_name' => 'Student'
            ]
        );

        $manageViewStudents = LaratrustPermission::firstOrCreate(
            [
            'name' => 'view_students',
            'display_name' => 'Manage Students View',
            ]
        );
        $manageAddStudents = LaratrustPermission::firstOrCreate(
            [
            'name' => 'add_student',
            'display_name' => 'Manage Student Add',
            ]
        );
        $manageEditStudents = LaratrustPermission::firstOrCreate(
            [
            'name' => 'edit_student',
            'display_name' => 'Manage Student Edit',
            ]
        );
        $manageDeleteStudents = LaratrustPermission::firstOrCreate(
            [
            'name' => 'delete_student ',
            'display_name' => 'Manage Student Delete',
            ]
        );

        // Attaching
        $admin->attachPermission($manageViewStudents);
        $admin->attachPermission($manageAddStudents);
        $admin->attachPermission($manageEditStudents);
        $admin->attachPermission($manageDeleteStudents);
     
    }
}
