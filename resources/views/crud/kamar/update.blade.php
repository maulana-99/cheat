<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Kamar</title>
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
            <h1>Edit Kamar</h1>
            <form action="{{ route('kamar.update', $kamar->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama_kamar">Nama Kamar</label>
                    <input type="text" id="nama_kamar" name="nama_kamar" class="form-control"
                        value="{{ $kamar->nama_kamar }}" required>
                </div>
                <div class="form-group">
                    <label for="tipe_kamar">Tipe Kamar</label>
                    <select id="tipe_kamar" name="tipe_kamar" class="form-control" required>
                        <option value="standard" {{ $kamar->tipe_kamar == 'standard' ? 'selected' : '' }}>Standard
                        </option>
                        <option value="superior" {{ $kamar->tipe_kamar == 'superior' ? 'selected' : '' }}>Superior
                        </option>
                        <option value="delux" {{ $kamar->tipe_kamar == 'delux' ? 'selected' : '' }}>Delux</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="bed">Tipe Bed</label>
                    <select id="bed" name="bed" class="form-control" required>
                        <option value="single" {{ $kamar->bed == 'single' ? 'selected' : '' }}>Single bed</option>
                        <option value="twin" {{ $kamar->bed == 'twin' ? 'selected' : '' }}>Twin bed</option>
                        <option value="double" {{ $kamar->bed == 'double' ? 'selected' : '' }}>Double bed</option>
                        <option value="king" {{ $kamar->bed == 'king' ? 'selected' : '' }}>King bed</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kapasitas">Kapasitas</label>
                    <select id="kapasitas" name="kapasitas" class="form-control" required>
                        <option value="1" {{ $kamar->kapasitas == '1' ? 'selected' : '' }}>1 orang</option>
                        <option value="2" {{ $kamar->kapasitas == '2' ? 'selected' : '' }}>2 orang</option>
                        <option value="3" {{ $kamar->kapasitas == '3' ? 'selected' : '' }}>3 orang</option>
                        <option value="4" {{ $kamar->kapasitas == '4' ? 'selected' : '' }}>4 orang</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" id="quantity" name="quantity" class="form-control"
                        value="{{ $kamar->quantity }}" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea id="deskripsi" name="deskripsi" class="form-control" required>{{ $kamar->deskripsi }}</textarea>
                </div>
                <button type="submit" class="btn-save">Update Kamar</button>
                <a href="{{ route('kamar.index') }}" class="btn-back">Kembali</a>
            </form>
        </div>
    </div>
</body>

</html>
