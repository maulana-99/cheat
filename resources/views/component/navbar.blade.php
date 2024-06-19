<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <script src="https://kit.fontawesome.com/d7c9159410.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar">
        <a class="navbar-brand" href="{{ url('/dashboard') }}"><i class="fa-solid fa-hotel"></i> HotelReserve</a>
        <ul class="navbar-nav">
            @auth
                <li>
                    <a href="#">Welcome {{ Auth::user()->name }}</a>
                </li>
                <li>
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                </li>
                <li>
                    <a href="/dashboard/room">Room</a>
                </li>
                <li>
                    <a href="{{ url('/dashboard/history') }}">History</a>
                </li>
                <li>
                    <a href="{{ url('/logout') }}">Logout</a>
                </li>
            @else
                <li>
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                </li>
                <li>
                    <a href="/dashboard/room">Room</a>
                </li>
                <li>
                    <a href="{{ url('/login') }}">Login</a>
                </li>
                <li>
                    <a href="{{ url('/register') }}">Register</a>
                </li>
            @endauth
        </ul>
    </nav>
</body>

</html>
