<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Penjualan</title>
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Dashboard Penjualan</h2>
        <ul>
            <li><a href="{{ url('contoh') }}">Home</a></li>
            <li><a href="{{ url('produk') }}">Produk</a></li>
            <li><a href="#">Penjualan</a></li>
            <li><a href="#">Laporan</a></li>
            <li><a href="#">Pengaturan</a></li>
        </ul>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Main Content -->
        <header style="display: flex; justify-content:space-between">
            <div>
                <h1>Daftar Produk</h1>
                <p>Temukan produk terbaik untuk kebutuhan anda</p>
            </div>
            <div>
                <button class="card-button"> Add Button </button>
            </div>
        </header>

        <!-- Product Grid -->
        <div>
            <div class="container">
                <h1>Create Produk</h1>

                <!-- Form to create a new product -->
                <form action="{{ url('/produk/add') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text" name="nama_produk" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="jumlah_produk">Jumlah Produk</label>
                        <input type="text" name="jumlah_produk" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="image">Url Gambar Produk</label>
                        <input type="text" name="image" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>

<!-- Footer -->
<footer>
    <p>&copy; 2024 Aplikasi Penjualan. All rights reserved.</p>
</footer>

    <!-- Optional JS -->
    <!--<script src="script.js"></script>-->
</body>

</html>
