@extends('layouts.master')

@section('content')

<div>
    <form method="POST" action="/auth/login">

        <h1>Login</h1>

        {!! csrf_field() !!}

        <div class="row">
            <div class="col-xs-4">Email</div>
            <div class="col-xs-8">
                <input type="email" name="email" value="{{ old('email') }}">
            </div>
        </div>

        <div class="row">
            <div class="col-xs-4">Password</div>
            <div class="col-xs-8">
                <input type="password" name="password" id="password">
            </div>
        </div>

        <div>
            <input type="checkbox" name="remember"> Remember Me
        </div>

        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</div>

@endsection