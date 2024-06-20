<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Fasilitas</title>
    <link rel="stylesheet" href="{{ asset('css/crudFasilitas.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8fafc;
            margin: 0;
            padding: 0;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h1 {
            color: #007bff;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group textarea {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
        }

        .form-group textarea {
            height: 100px;
        }

        .btn-save {
            background-color: #28a745;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn-save:hover {
            background-color: #218838;
        }

        .btn-back {
            background-color: #6c757d;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    @include('component.navbaradmin')
    <div class="container">
        <h1>Update Fasilitas</h1>
        <form action="{{ route('fasilitas.update', $fasilitas->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_fasilitas">Nama Fasilitas</label>
                <input type="text" id="nama_fasilitas" name="nama_fasilitas" class="form-control" value="{{ $fasilitas->nama_fasilitas }}" required>
            </div>
            <div class="form-group">
                <label for="deskripsi_fasilitas">Deskripsi Fasilitas</label>
                <textarea id="deskripsi_fasilitas" name="deskripsi_fasilitas" class="form-control" required>{{ $fasilitas->deskripsi_fasilitas }}</textarea>
            </div>
            <div class="form-group">
                <label for="foto_fasilitas">Foto Fasilitas</label>
                <input id="foto_fasilitas" name="foto_fasilitas" class="form-control-file" value="{{ $fasilitas->foto_fasilitas }}" required>
            </div>
            <button type="submit" class="btn-save">Update Fasilitas</button>
            <a href="{{ route('fasilitas.index') }}" class="btn-back">Kembali</a>
        </form>
    </div>
</body>

</html>
