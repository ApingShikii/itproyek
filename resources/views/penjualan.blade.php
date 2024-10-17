<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Penjualan</title>
    <style>
        /* General styles for the body */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #fbe8a6; /* Warm yellow background */
            margin: 0;
            padding: 0;
            color: #333;
        }

        /* Header styles */
        .header {
            background-color: #f6a600; /* Deep yellow-orange */
            padding: 15px 20px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .header h1 {
            color: #ffffff;
            margin: 0;
            font-size: 28px;
        }

        .nav-links {
            margin-top: 10px;
        }

        .nav-links a {
            color: #ffffff;
            text-decoration: none;
            margin: 0 15px;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .nav-links a:hover {
            background-color: #db9b00; /* Darker shade for hover */
        }

        /* Container for the form */
        .post-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: #333;
            margin-bottom: 15px;
            border-bottom: 2px solid #f6a600; /* Match header color */
            padding-bottom: 5px;
        }

        /* Styling the form */
        form {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        input[type="text"],
        textarea {
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
            border: 2px solid #ccc;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        textarea:focus {
            border-color: #f6a600; /* Focus border color */
            outline: none;
        }

        button {
            background-color: #f6a600; /* Button color */
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #db9b00; /* Darker shade on hover */
        }

        /* Styling for post list */
        .post-list {
            margin-top: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .post {
            background-color: #f6a600; /* Post background color */
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
            color: white;
        }

        .post h3 {
            margin: 0;
        }

        /* Styling for edit and delete links */
        .post-actions {
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
        }

        .post-actions a,
        .post-actions form button {
            background-color: #333;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .post-actions a:hover,
        .post-actions form button:hover {
            background-color: #555;
        }

        form.delete-post {
            display: inline;
        }

        form.delete-post button {
            background-color: red;
        }

        form.delete-post button:hover {
            background-color: darkred;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Halaman Penjualan</h1>
        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/ayam">Ayam</a>
            <a href="/pakan">Pakan</a>
        </div>
    </div>

    <div class="post-container">
        <h2>Silahkan Tambah Data Penjualan</h2>
        <form action="/create-post" method="POST">
            @csrf
            <input type="text" name="title" placeholder="Judul Penjualan" required>
            <textarea name="body" placeholder="Isi konten..." required></textarea>
            <button type="submit">Simpan Data</button>
        </form>

        <div class="post-list">
            <h2>Data Yang Tersimpan</h2>
            @foreach ($posts as $post)
            <div class="post">
                <h3>{{ $post['title'] }}</h3>
                <p>{{ $post['body'] }}</p>

                <div class="post-actions">
                    <a href="/edit-post/{{ $post->id }}">Edit</a>
                    <form class="delete-post" action="/delete-post/{{ $post->id }}" method="POST" onsubmit="return confirm('Tekan Oke Jika Data Ingin Di Hapus')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
