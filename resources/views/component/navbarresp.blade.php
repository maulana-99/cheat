<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/navbaradmin.css') }}">
    <script src="https://kit.fontawesome.com/d7c9159410.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar">
        <a class="navbar-brand" href="{{ url('/dashboard/resepsionis') }}"><i class="fa-solid fa-hotel"></i> HotelReserve</a>
        <ul class="navbar-nav">
            <li>
                <a href="#">Welcome {{ Auth::user()->name }}</a>
            </li>
            <li>
                <a href="{{ url('/dashboard/resepsionis') }}">Dashboard Resepsionis</a>
            </li>
            <li>
                <a href="{{ url('/logout') }}">Logout</a>
            </li>
        </ul>
    </nav>
</body>

</html>
