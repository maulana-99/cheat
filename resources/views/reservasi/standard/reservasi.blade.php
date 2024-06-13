<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Reservasi Form</h3>
            </div>
            <div class="card-body">
                <form action="/reservasi" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="user_id" class="form-label">User ID</label>
                        <input type="number" class="form-control" id="user_id" name="user_id" required>
                    </div>
                    <div class="mb-3">
                        <label for="kamar_id" class="form-label">Kamar ID</label>
                        <input type="number" class="form-control" id="kamar_id" name="kamar_id" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="no_tlp" class="form-label">No Telepon</label>
                        <input type="text" class="form-control" id="no_tlp" name="no_tlp" required>
                    </div>
                    <div class="mb-3">
                        <label for="check_in" class="form-label">Check In</label>
                        <input type="date" class="form-control" id="check_in" name="check_in" required>
                    </div>
                    <div class="mb-3">
                        <label for="check_out" class="form-label">Check Out</label>
                        <input type="date" class="form-control" id="check_out" name="check_out" required>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" name="status" required>
                            <option value="0">0 - Pending</option>
                            <option value="1" selected>1 - Confirmed</option>
                            <option value="2">2 - Cancelled</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
