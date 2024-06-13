<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>
@include('component.navbar')
    <div class="hero-section">
        <h1>Welcome to HotelReserve!</h1>
        <p>Tujuan utama Anda adalah memastikan pemesanan hotel yang lancar dan pengalaman menginap yang tak terlupakan.
        </p>
    </div>

    <div class="container">
        <div class="welcome-section">
            <h2>Discover Your Perfect Stay</h2>
            <p>Temukan kenyamanan dan kemewahan di ujung jari Anda. Baik Anda merencanakan liburan akhir pekan atau
                liburan panjang, HotelReserve memudahkan Anda menemukan dan memesan akomodasi yang sempurna. Mulailah
                perjalanan Anda bersama kami hari ini!</p>
        </div>
        <h2 style="text-align: center">Fasilitas Hotel Dan <br> Fasilitas setiap kamar</h2>
        <div class="featured-section">
            @foreach ($fasilitas as $item)
                <div class="featured-item">
                    <img src="{{ $item->foto_fasilitas }}" alt="Comfortable Rooms">
                    <h3>{{ $item->nama_fasilitas }}</h3>
                    <p>{{ $item->deskripsi_fasilitas }}</p>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
