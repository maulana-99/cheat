<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservasi</title>
    <link rel="stylesheet" href="{{ asset('css/reservasi.css') }}">
</head>

<body>
    @include('component.navbar')
    <div class="card-container">
        @if ($kamars->isEmpty())
            <p>No room available</p>
        @else
            @foreach ($kamars as $item)
                <div class="card-reservasi">
                    <div class="card-header">
                        <h2 >{{ $item->nama_kamar }}</h2>
                    </div>
                    <div class="card-body">
                        <p><strong>Tipe Kamar:</strong> {{ $item->tipe_kamar }}</p>
                        <p><strong>Bed:</strong> {{ $item->bed }}</p>
                        <p><strong>Kapasitas:</strong> {{ $item->kapasitas }} orang</p>
                        <p><strong>Tersisa:</strong> {{ $item->quantity }} Kamar</p>
                    </div>
                    <hr>
                    <div class="card-footer">
                        <a class="book-button">Book Now</a>
                    </div>
                    <br>
                </div>
            @endforeach
        @endif
    </div>
</body>

</html>
