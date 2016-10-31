<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;

class OptionsController extends Controller
{

    protected $users;

    public function __construct(User $users)
    {
        $this->users = $users;

    }

    public function index()
    {
        $users = $this->users->paginate(10);

        return view('admin', compact('users'));
    }

    public function confirm(Requests\DeleteUserRequest $request, $id)
    {
        $user = $this->users->findOrFail($id);

        return view('layouts.backend.users.confirm', compact('user'));
    }

    public function destroy(Requests\DeleteUserRequest $request, $id)
    {
        $user = $this->users->findOrFail($id);

        $user->delete();

        return redirect(route('layouts.backend.users.confirm'))->with('status', 'User has been deleted.');
    }
}
