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
        <a class="navbar-brand" href="{{ url('/dashboard/admin') }}"><i class="fa-solid fa-hotel"></i> HotelReserve</a>
        <ul class="navbar-nav">
            <li>
                <a href="#">Welcome {{ Auth::user()->name }}</a>
            </li>
            <li>
                <a href="{{ url('/dashboard/admin') }}">Dashboard Admin</a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle">Crud</a>
                <div class="dropdown-content">
                    <a href="#">Select Crud</a>
                    <a href="{{ url('/dashboard/admin/kamar') }}">Kamar</a>
                    <a href="{{ url('/dashboard/admin/fasilitas') }}">Fasilitas</a>
                    <a href="{{ url('/dashboard/admin/resepsionis') }}">Resepsionis</a>
                </div>
            </li>
            <li>
                <a onclick="return confirm('Apakah Anda yakin ingin logout?');" href="{{ url('/logout') }}">Logout</a>
            </li>
        </ul>
    </nav>
</body>

</html>
