<?php
use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'User')->first();
        $role_content = Role::where('name', 'Content')->first();
        $role_financieel = Role::where('name', 'Financieel')->first();
        $role_admin = Role::where('name', 'Admin')->first();

        $user = new User();
        $user->name = 'Matthew';
        $user->email = 'visitor@example.com';
        $user->password = bcrypt('visitor');
        $user->save();
        $user->roles()->attach($role_user);

        $admin = new User();
        $admin->name = 'Justin';
        $admin->email = 'admin@example.com';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $content = new User();
        $content->name = 'Hans';
        $content->email = 'content@example.com';
        $content->password = bcrypt('content');
        $content->save();
        $content->roles()->attach($role_content);

        $financieel = new User();
        $financieel->name = 'Hans';
        $financieel->email = 'financieel@example.com';
        $financieel->password = bcrypt('hans');
        $financieel->save();
        $financieel->roles()->attach($role_financieel);
    }
}