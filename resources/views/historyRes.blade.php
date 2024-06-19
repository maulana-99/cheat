<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>History Pemesanan</title>
    <link rel="stylesheet" href="{{ asset('css/history.css') }}">
</head>

<body>
    @include('component.navbar')
    @include('component.alert')
    <div class="container">
        <div class="card-container">
            @foreach ($reservasi as $item)
                <div class="card">
                    <div class="card-content">
                        <h3>{{ $item->nama_kamar }}</h3>
                        <p>Jenis Kamar : {{ $item->tipe_kamar }}</p>
                        <p>Nama Pemesan : {{ $item->nama_lengkap }}</p>
                        <p>Nomor Telepon : {{ $item->no_tlp }}</p>
                        <p>Alamat : {{ $item->alamat }}</p>
                        <p>Jumlah Kamar : {{ $item->quantity }}</p>
                        <p>Check in : {{ $item->check_in }}</p>
                        <p>Check out : {{ $item->check_out }}</p>
                        @if ($item->status == '1')
                            <div class="container-status">
                                <p class="status">Belum Check in</p>
                            </div>
                        @elseif ($item->status == '2')
                            <div class="container-status">
                                <p class="status">Sedang Reservasi</p>
                            </div>
                        @else
                            <div class="container-status">
                                <p class="status">Reservasi Selesai</p>
                            </div>
                        @endif
                        <div class="container-print-btn">
                            <a href="{{ route('generate.pdf', $item->id) }}" class="print-btn">Cetak invoice</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
