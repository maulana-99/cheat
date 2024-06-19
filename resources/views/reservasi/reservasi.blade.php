<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking Reservasi</title>
    <link rel="stylesheet" href="{{ asset('css/booking.css') }}">
</head>

<body>
    @include('component.navbar')
    <div class="booking-form-container">
        <h2>Form Data Pemesan untuk {{ $kamar->nama_kamar }}</h2>
        @include('component.error')
        <br>
        <form action="{{ route('book.store') }}" method="POST">
            @csrf
            <input type="hidden" name="kamar_id" value="{{ $kamar->id }}">
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap:</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" required>
            </div>
            <div class="form-group">
                <label for="no_tlp">No. Telp:</label>
                <input type="text" id="no_tlp" name="no_tlp" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" required>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1"
                    max="{{ $kamar->quantity }}" required>
            </div>
            <div class="form-group">
                <label for="check_in">Check-In Date:</label>
                <input type="date" id="check_in" name="check_in" required>
            </div>
            <div class="form-group">
                <label for="check_out">Check-Out Date:</label>
                <input type="date" id="check_out" name="check_out" required>
            </div>
            <input type="hidden" name="status" value="pending">
            <div class="form-group">
                @auth
                    <button type="submit" class="submit-button">Booking</button>
                @else
                    <a class="login-book" href="{{ url('/login') }}">Booking</a>
                @endauth
            </div>
        </form>
    </div>
</body>

</html>
