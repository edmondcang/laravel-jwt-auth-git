@extends('layouts.master')

@section('content')

<div>
    <form method="POST" action="/auth/register">

        <h1>Sign Up</h1>

        {!! csrf_field() !!}

        <div class="row">
            <div class="col-xs-4">Name</div>
            <div class="col-xs-8">
                <input type="text" name="name" value="{{ old('name') }}">
            </div>
        </div>

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

        <div class="row">
            <div class="col-xs-4">Confirm Password</div>
            <div class="col-xs-8">
                <input type="password" name="password_confirmation" id="password_confirmation">
            </div>
        </div>

        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</div>

@endsection