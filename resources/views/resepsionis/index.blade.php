<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/resepsionis.css') }}">
    <title>Daftar Reservasi</title>
</head>

<body>
    @include('component.navbarresp')
    <div class="container">
        <h1>Daftar Reservasi</h1>
        @include('component.alert')
        <form class="filter" action="{{ route('resepsionis.index') }}" method="get">
            <div class="filter-chekIn">
                <p>Check In</p>
                <input type="date" name="src-date" value="">
            </div>
            <div class="filter-name">
                <p>Nama :</p>
                <input type="text" name="nama_lengkap">
            </div>
            <div class="container-btn">
                <br>
                <p></p>
                <button class="btn-src" type="submit">Cari</button>
            </div>
        </form>
        <table>
            <thead>
                <tr>
                    <th>Nama Pemesan</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Nama Kamar</th>
                    <th>Tipe Kamar</th>
                    <th>Jumlah Kamar</th>
                    <th>Check in</th>
                    <th>Check out</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($reservasi as $item)
                    <tr>
                        <td>{{ $item->nama_lengkap }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->no_tlp }}</td>
                        <td>{{ $item->nama_kamar }}</td>
                        <td>{{ $item->tipe_kamar }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->check_in }}</td>
                        <td>{{ $item->check_out }}</td>
                        <td>
                            @if ($item->status == '1')
                                <form action="{{ route('resepsionis.checkin', $item->id) }}" method="POST"
                                    onsubmit="return confirm('Apakah Anda yakin ingin men check in ini?');"
                                    style="display:inline;">
                                    @csrf
                                    <button class="btn ci" type="submit">Chek In</button>
                                </form>
                            @elseif ($item->status == '2')
                                <form action="{{ route('resepsionis.checkout', $item->id) }}" method="POST"
                                    onsubmit="return confirm('Apakah Anda yakin ingin men check out ini?');"
                                    style="display:inline;">
                                    @csrf
                                    <button class="btn co" type="submit">Chek Out</button>
                                </form>
                            @else
                                <button class="btn" disabled>Reservasi Selesai</button>
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9">Tidak ada reservasi</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
