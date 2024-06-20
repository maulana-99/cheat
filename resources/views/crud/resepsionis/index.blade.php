<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Resepsionis</title>
    <link rel="stylesheet" href="{{ asset('css/crudFasilitas.css') }}">
</head>

<body>
    @include('component.navbaradmin')
    <div class="container">
        <h1>Daftar Resepsionis</h1>
        @include('component.alert')
        <a href="{{ route('resepsionis.create') }}" class="btn btn-add">Tambah Resepsionis</a>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $resepsionis)
                    @if ($resepsionis->role == 'resepsionis')
                        <tr>
                            <td>{{ $resepsionis->name }}</td>
                            <td>{{ $resepsionis->email }}</td>
                            <td>{{ $resepsionis->role }}</td>
                            <td>
                                <a href="{{ route('resepsionis.edit', $resepsionis->id) }}" class="btn btn-edit">Edit</a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
