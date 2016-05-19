@extends('layouts.master')

@section('content')

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th colspan="3">User Table</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<div>
    @if (!Auth::check())
    <a href="/auth/login">Login</a>
    <a href="/auth/register">Register</a>
    @else
    <a href="/auth/logout">Logout</a>
    @endif
</div>

@endsection
