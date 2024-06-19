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
        <button class="btn btn-add">Tambah Fasilitas</button>
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
                <!-- Contoh Data -->
                <tr>
                    <td>Fasilitas 1</td>
                    <td>Deskripsi Fasilitas 1</td>
                    <td><img src="foto1.jpg" alt="Foto Fasilitas 1" class="img-thumbnail"></td>
                    <td>
                        <button class="btn btn-edit">Edit</button>
                        <button class="btn btn-delete">Hapus</button>
                    </td>
                </tr>
                <!-- Data lainnya bisa diisi disini -->
            </tbody>
        </table>
    </div>
</body>

</html>
