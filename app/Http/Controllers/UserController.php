<?php

namespace App\Http\Controllers;
use App\Http\Requests;

use App\User;
use App\Role;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function admin()
    {
        $users = User::all();
        return view('admin', ['users' => $users]);

        return response('Article generated!', 200);
    }

    public function postAdminAssignRoles(Request $request)
    {
        $user = User::where('email', $request['email'])->first();
        $user->roles()->detach();
        if ($request['role_user']) {
            $user->roles()->attach(Role::where('name', 'User')->first());
        }
        if ($request['role_content']) {
            $user->roles()->attach(Role::where('name', 'Content')->first());
        }
        if ($request['role_financieel']) {
            $user->roles()->attach(Role::where('name', 'Financieel')->first());
        }
        if ($request['role_admin']) {
            $user->roles()->attach(Role::where('name', 'Admin')->first());
        }
        return redirect()->back();
    }


}
