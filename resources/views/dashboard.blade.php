<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    @auth
        <h1>{{ Auth::user()->name }}</h1>
        <a href="{{ url('/logout') }}"> Logout</a>
    @else
        <a href="{{ url('/login') }}">Login</a>
        <a href="{{ url('/register') }}"> Register</a>
    @endauth
</body>

</html>
