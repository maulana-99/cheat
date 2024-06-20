<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Kamar</title>
    <link rel="stylesheet" href="{{ asset('css/crudFasilitas.css') }}">
</head>

<body>
    @include('component.navbaradmin')
    <div class="container">
        <h1>Daftar Kamar</h1>
        @include('component.alert')
        <a href="/dashboard/admin/kamar/create" class="btn btn-add">Tambah Kamar</a>
        <table>
            <thead>
                <tr>
                    <th>Nama Kamar</th>
                    <th>Tipe Kamar</th>
                    <th>Kasur</th>
                    <th>Kapasitas</th>
                    <th>Quantity</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kamar as $item)
                    <tr>
                        <td>{{ $item->nama_kamar }}</td>
                        <td>{{ $item->tipe_kamar }}</td>
                        <td>{{ $item->bed }}</td>
                        <td>{{ $item->kapasitas }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>
                            <div class="td-content">{{ $item->deskripsi }}</div>
                        </td>
                        <td>
                            <a href="{{ route('kamar.edit', $item->id) }}" class="btn btn-edit">Edit</a>
                            <form action="{{ route('kamar.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus kamar ini?');">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
