<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="{{ asset('css/adminStyle.css') }}">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .dashboard {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }
        .dashboard-item {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            width: 30%;
            text-align: center;
        }
        .dashboard-item h3 {
            color: #333;
        }
        .dashboard-item p {
            font-size: 24px;
            color: #555;
        }
    </style>
</head>
<body>
    @include('component.navbaradmin')
    <div class="dashboard">
        <div class="dashboard-item">
            <h3>Total Kamar</h3>
            <p>{{ $totalKamar }}</p>
        </div>
        <div class="dashboard-item">
            <h3>Total Reservasi</h3>
            <p>{{ $totalReservasi }}</p>
        </div>
        <div class="dashboard-item">
            <h3>Total Fasilitas</h3>
            <p>{{ $totalFasilitas }}</p>
        </div>
    </div>
</body>
</html>