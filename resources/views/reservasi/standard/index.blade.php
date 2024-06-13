<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservasi</title>
</head>

<body>
    <div class="card-container">
        @if ($kamars->isEmpty())
            <p>No room available</p>
        @else
            @foreach ($kamars as $item)
                <div class="card-reservasi">
                    <p>Nama Kamar: {{ $item->nama_kamar }}</p>
                    <p>Tipe Kamar: {{ $item->tipe_kamar }}</p>
                    <p>Bed: {{ $item->bed }}</p>
                    <p>Kapasitas: {{ $item->kapasitas }}</p>
                    <p>Nomor Kamar: {{ $item->nomor_kamars }}</p>
                    <a href="{{ route('reservasi.book', $item->id) }}">Book</a>
                    <hr>
                </div>
            @endforeach
        @endif
    </div>
</body>

</html>
