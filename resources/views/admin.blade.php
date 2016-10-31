@extends('layouts.app')

@section('content')

    <div class="container">
    <h1>Users</h1><table>
        <table class="table table-hover">
            <thead>
            <th>naam</th>
            <th>E-Mail</th>
            <th>User</th>
            <th>Content</th>
            <th>Financieel</th>
            <th>Admin</th>
            <th></th>
            <th></th>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <form action="{{ route('admin.assign') }}" method="post">
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }} <input type="hidden" name="email" value="{{ $user->email }}"></td>
                        <td><input type="checkbox" {{ $user->hasRole('User') ? 'checked' : '' }} name="role_user"></td>
                        <td><input type="checkbox" {{ $user->hasRole('Content') ? 'checked' : '' }} name="role_content"></td>
                        <td><input type="checkbox" {{ $user->hasRole('Financieel') ? 'checked' : '' }} name="role_financieel"></td>
                        <td><input type="checkbox" {{ $user->hasRole('Admin') ? 'checked' : '' }} name="role_admin"></td>
                        {{ csrf_field() }}
                        <td><button class="btn btn-success" type="submit">Assign Roles</button></td>
                        <td>
                            <a href="{{ URL::route('layouts.backend.users.confirm') }}" class="btn btn-info">Delete</a>
                            </a>
                        </td>
                    </form>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



@endsection