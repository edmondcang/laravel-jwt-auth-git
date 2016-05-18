<!DOCTYPE html>
<html>
    <head>

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container">
            <div class="content">
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
                <hr>
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
                            <button type="submit">Login</button>
                        </div>
                    </form>
                </div>
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
                                <input type="password" name="password" id="password_confirmation">
                            </div>
                        </div>

                        <div>
                            <button type="submit">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
