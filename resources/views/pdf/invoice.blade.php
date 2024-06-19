<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Invoice</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
            line-height: 1.6;
        }

        .invoice-container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .invoice-section {
            padding: 10px;
        }

        h1 {
            text-align: center;
            color: #f05340;
            margin: 0;

        }

        h2 {
            text-align: center;
            margin: 0;
        }

        h3 {
            color: #f05340;
            margin: 0;
        }

        p {
            color: #333333;
            margin: 0;
        }

        .completed {
            font-size: 40px;
            font-weight: bold;
            font-style: italic;
            color: #28a745;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.8em;
            color: #888888;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="invoice-container">
        <h1>Invoice</h1>
        <h2>
            @if ($reservasi->status == '0')
                <span class="completed">SELESAI</span>
            @endif
        </h2>
        <div class="invoice-section">
            <div class="invoice-ip">
                <h3>Informasi Pemesan</h3>
                <p>Nama Pemesan: {{ $reservasi->nama_lengkap }}</p>
                <p>Nomor Telepon: {{ $reservasi->no_tlp }}</p>
                <p>Alamat: {{ $reservasi->alamat }}</p>
                <p>Jumlah Kamar: {{ $reservasi->quantity }}</p>
                <p>Check in: {{ $reservasi->check_in }}</p>
                <p>Check out: {{ $reservasi->check_out }}</p>
            </div>
            <br><br>
            <div class="invoice-ik">
                <h3>Informasi Kamar</h3>
                <p>Nama Kamar: {{ $reservasi->kamar->nama_kamar }}</p>
                <p>Jenis Kamar: {{ $reservasi->kamar->tipe_kamar }}</p>
                <p>Jenis Kasur: {{ $reservasi->kamar->bed }} bed</p>
                <p>Kapasitas: {{ $reservasi->kamar->kapasitas }} orang</p>
            </div>
        </div>
        <div class="footer">
            @if ($reservasi->status == '1')
                <p>Kami menanti kunjungan Anda!</p>
            @elseif($reservasi->status == '2')
                <p>Selemat menikmati kunjungan Anda!</p>
            @else
                <p>Terima kasih atas kunjungan Anda!</p>
            @endif
        </div>
    </div>
</body>

</html>
