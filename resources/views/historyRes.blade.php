<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>History Pemesanan</title>
</head>

<body>
    @foreach ($reservasi as $item)
        <p>{{ $item->nama_kamar }}</p>
        <p>{{ $item->tipe_kamar }}</p>
        <p>{{ $item->nama_lengkap }}</p>
    @endforeach
</body>

</html>
