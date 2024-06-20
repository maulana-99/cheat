<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Fasilitas</title>
    <link rel="stylesheet" href="{{ asset('css/crudFasilitas.css') }}">
</head>

<body>
    @include('component.navbaradmin')
    <div class="container">
        <h1>Daftar Fasilitas</h1>
        @include('component.alert')
        <a href="/dashboard/admin/fasilitas/create" class="btn btn-add">Create</a>
        <table>
            <thead>
                <tr>
                    <th>Nama Fasilitas</th>
                    <th>Deskripsi Fasilitas</th>
                    <th>Foto Fasilitas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fasilitas as $item)
                    <tr>
                        <td>{{ $item->nama_fasilitas }}</td>
                        <td>
                            <div class="td-content">{{ $item->deskripsi_fasilitas }}</div>
                        </td>
                        <td><img src="{{ $item->foto_fasilitas }}" class="img-thumbnail"></td>
                        <td>
                            <a href="{{ route('fasilitas.edit', $item->id) }}" class="btn btn-edit">Edit</a>
                            <form action="{{ route('fasilitas.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus fasilitas ini?');">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
