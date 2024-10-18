<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Definisi tipe dokumen sebagai HTML5 -->
    <meta charset="UTF-8"> <!-- Set karakter encoding sebagai UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Mengatur agar tampilan responsif -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- Kompatibilitas dengan Internet Explorer -->
    <title>Home - Sistem Manajemen Peternakan</title> <!-- Judul halaman -->

    <style>
        /* Styling umum untuk body halaman */
        body {
            font-family: Arial, sans-serif; /* Gunakan font Arial atau sans-serif jika Arial tidak tersedia */
            background-color: #fbe8a6; /* Warna latar belakang kuning hangat */
            margin: 0; /* Menghapus margin default dari body */
            padding: 0; /* Menghapus padding default dari body */
        }

        /* Styling untuk header halaman */
        header {
            background-color: #f6a600; /* Warna latar belakang header kuning-oranye pekat */
            color: white; /* Warna teks di dalam header putih */
            padding: 10px 0; /* Padding atas dan bawah 10px, kiri dan kanan 0 */
            text-align: center; /* Mengatur teks header di tengah */
        }

        /* Styling untuk container utama halaman */
        .container {
            max-width: 1200px; /* Lebar maksimal container 1200px */
            margin: 20px auto; /* Mengatur jarak atas dan bawah 20px, margin kiri-kanan auto agar rata tengah */
            padding: 20px; /* Padding dalam container 20px */
        }

        /* Styling untuk judul utama (h1) */
        h1 {
            color: #f6a600; /* Warna teks judul sama dengan warna header */
            text-align: center; /* Posisi teks judul di tengah */
            margin-bottom: 50px; /* Jarak bawah 50px */
        }

        /* Styling untuk wrapper fitur-fitur */
        .feature {
            display: flex; /* Menampilkan elemen dalam container secara horisontal */
            justify-content: space-between; /* Memberi jarak yang sama antara elemen */
            margin-bottom: 30px; /* Jarak bawah 30px */
        }

        /* Styling untuk kotak setiap fitur */
        .feature-box {
            background-color: white; /* Warna latar belakang putih */
            border-radius: 10px; /* Sudut yang melengkung 10px */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Efek bayangan ringan di bawah kotak */
            flex-basis: 30%; /* Masing-masing fitur mengambil 30% dari lebar container */
            padding: 20px; /* Padding dalam kotak 20px */
            text-align: center; /* Teks dalam kotak rata tengah */
            transition: transform 0.3s ease-in-out; /* Efek transisi saat kotak dihover */
        }

        /* Styling saat kotak fitur di-hover */
        .feature-box:hover {
            transform: translateY(-10px); /* Kotak akan naik 10px saat di-hover */
        }

        /* Styling untuk gambar di dalam kotak fitur */
        .feature-box img {
            width: 100px; /* Lebar gambar 100px */
            height: 100px; /* Tinggi gambar 100px */
            object-fit: contain; /* Menjaga proporsi gambar */
            margin-bottom: 20px; /* Jarak bawah gambar 20px */
        }

        /* Styling untuk judul setiap fitur */
        .feature-box h2 {
            font-size: 24px; /* Ukuran font judul fitur 24px */
            margin-bottom: 10px; /* Jarak bawah judul fitur 10px */
            color: #333; /* Warna teks abu-abu gelap */
        }

        /* Styling untuk paragraf penjelasan di dalam kotak fitur */
        .feature-box p {
            font-size: 16px; /* Ukuran font 16px */
            color: #777; /* Warna teks abu-abu terang */
        }

        /* Styling untuk tombol link dalam kotak fitur */
        .feature-box a {
            display: inline-block; /* Membuat tombol menjadi inline block */
            padding: 10px 20px; /* Padding dalam tombol (atas-bawah 10px, kiri-kanan 20px) */
            margin-top: 20px; /* Jarak atas tombol 20px */
            background-color: #f6a600; /* Warna latar belakang tombol sama dengan header */
            color: white; /* Warna teks putih */
            text-decoration: none; /* Menghapus garis bawah pada link */
            border-radius: 5px; /* Sudut melengkung 5px */
        }

        /* Styling saat tombol di-hover */
        .feature-box a:hover {
            background-color: #db9b00; /* Warna latar belakang lebih gelap saat di-hover */
        }

        /* Styling untuk footer halaman */
        footer {
            text-align: center; /* Teks di tengah */
            margin-top: 50px; /* Jarak atas footer 50px */
            padding: 20px; /* Padding dalam footer 20px */
            background-color: #f6a600; /* Warna latar belakang footer sama dengan header */
            color: white; /* Warna teks putih */
        }
    </style>
</head>
<body>

    <!-- Header halaman -->
    <header>
        <h1>Sistem Manajemen Peternakan</h1> <!-- Judul sistem di dalam header -->
    </header>

    <!-- Container utama halaman -->
    <div class="container">
        <h1>Selamat Datang di Sistem Manajemen Peternakan</h1> <!-- Judul utama halaman -->

        <!-- Wrapper untuk semua fitur -->
        <div class="feature">
            <!-- Fitur Ayam -->
            <div class="feature-box">
                <!-- Gambar untuk fitur Ayam -->
                <img src="https://i.pinimg.com/564x/27/b3/71/27b371ae5918dbcaa68c454743fa43cf.jpg" alt="Ayam">
                <h2>Manajemen Ayam</h2> <!-- Judul fitur Ayam -->
                <p>Kelola semua informasi terkait ayam seperti jenis, umur, kesehatan, dan lain-lain. Memastikan pengelolaan ternak berjalan dengan baik.</p> <!-- Deskripsi fitur Ayam -->
                <a href="/ayam">Kelola Ayam</a> <!-- Tombol link menuju halaman manajemen Ayam -->
            </div>

            <!-- Fitur Pakan -->
            <div class="feature-box">
                <!-- Gambar untuk fitur Pakan -->
                <img src="https://cdn-icons-png.flaticon.com/512/3239/3239288.png" alt="Pakan">
                <h2>Manajemen Pakan</h2> <!-- Judul fitur Pakan -->
                <p>Kelola stok pakan, kebutuhan nutrisi, dan jadwal pemberian pakan untuk memastikan produksi ternak tetap optimal.</p> <!-- Deskripsi fitur Pakan -->
                <a href="/pakan">Kelola Pakan</a> <!-- Tombol link menuju halaman manajemen Pakan -->
            </div>

            <!-- Fitur Penjualan -->
            <div class="feature-box">
                <!-- Gambar untuk fitur Penjualan -->
                <img src="https://static.vecteezy.com/system/resources/previews/014/655/524/original/finance-graph-chart-icon-simple-style-vector.jpg" alt="Penjualan">
                <h2>Manajemen Penjualan</h2> <!-- Judul fitur Penjualan -->
                <p>Lacak dan kelola penjualan hasil ternak, penjadwalan penjualan, serta manajemen pelanggan dan pendapatan.</p> <!-- Deskripsi fitur Penjualan -->
                <a href="/penjualan">Kelola Penjualan</a> <!-- Tombol link menuju halaman manajemen Penjualan -->
            </div>
        </div>
    </div>

    <!-- Footer halaman -->
    <footer>
        <p>&copy;Peternakan Ayam Bapak Sarwani</p> <!-- Informasi copyright di footer -->
    </footer>

</body>
</html>
