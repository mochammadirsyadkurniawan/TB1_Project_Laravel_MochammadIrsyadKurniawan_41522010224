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
                <button class="card-button"><a class="text-decoration-none text-white" href="{{ url('produk/add') }}">Add Button</a></button>
            </div>
        </header>

        <!-- Product Grid -->
        <div class="product-grid">
            @foreach ($produk as $item)
                <div class="product-card">
                    <img src="{{ $item->image }}" alt="Produk 1">
                    <h3>{{ $item->nama_produk }}</h3>
                    <p class="price">{{ $item->harga }}</p>
                    <p class="description">{{ $item->deskripsi}}</p>
                    <div style="display: flex; justify-content:center">
                        <a class="btn btn-success mr-2" href="{{ url('produk/edit/' . $item->kode_produk) }}">Edit</a>
                        {{-- <button class="add-to-card card-button">Edit</button> --}}
                        {{-- <button class="cancel-to-card card-button">Delete</button> --}}
                        <form action="{{ url('produk/delete/' . $item->kode_produk) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <footer class="footer">
            <p>&copy; 2024 Aplikasi Penjualan. All rights reserved.</p>
        </footer>
    <!-- Optional JS -->
    <!--<script src="script.js"></script>-->
</body>

</html>
