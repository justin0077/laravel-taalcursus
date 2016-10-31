<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new Role();
        $role_user->name = 'User';
        $role_user->description = 'A normal User';
        $role_user->save();

        $role_content = new Role();
        $role_content->name = 'Content';
        $role_content->description = 'A Content';
        $role_content->save();

        $role_financieel = new Role();
        $role_financieel->name = 'Financieel';
        $role_financieel->description = 'A Finance';
        $role_financieel->save();

        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->description = 'A Admin';
        $role_admin->save();
    }
}
