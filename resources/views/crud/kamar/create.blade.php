<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Kamar</title>
    <link rel="stylesheet" href="{{ asset('css/crudKamar.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8fafc;
            margin: 0;
            padding: 0;
        }

        .c-c {
            margin: 0;
            padding: 0;
            justify-content: center;
            align-items: center;
            height: 100vh;
            display: flex;
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
        .form-group select {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            font-size: 16px;
            box-sizing: border-box;
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
    <div class="c-c">
        <div class="container">
            <h1>Tambah Kamar Baru</h1>
            <form action="{{ route('kamar.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama_kamar">Nama Kamar</label>
                    <input type="text" id="nama_kamar" name="nama_kamar" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tipe_kamar">Tipe Kamar</label>
                    <select id="tipe_kamar" name="tipe_kamar" class="form-control" required>
                        <option value="standard">Standard</option>
                        <option value="superior">Superior</option>
                        <option value="delux">Delux</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="bed">Tipe Bed</label>
                    <select id="bed" name="bed" class="form-control" required>
                        <option value="single">Single bed</option>
                        <option value="twin">Twin bed</option>
                        <option value="double">Double bed</option>
                        <option value="king">King bed</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kapasitas">Kapasitas</label>
                    <select id="kapasitas" name="kapasitas" class="form-control" required>
                        <option value="1">1 orang</option>
                        <option value="2">2 orang</option>
                        <option value="3">3 orang</option>
                        <option value="4">4 orang</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" id="deskripsi" name="deskripsi" class="form-control" required></input>
                </div>
                <button type="submit" class="btn-save">Simpan Kamar</button>
                <a href="{{ route('kamar.index') }}" class="btn-back">Kembali</a>
            </form>
        </div>
    </div>
</body>

</html>
