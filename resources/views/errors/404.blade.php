<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tidak Ditemukan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            text-align: center;
            padding: 50px;
        }
        h1 {
            font-size: 100px;
            color: #333;
        }
        p {
            font-size: 20px;
            color: #666;
        }
        a {
            color: #007BFF;
            text-decoration: none;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1>404</h1>
    <p>Halaman yang Anda cari tidak ditemukan.</p>
    <p><a href="{{ route('home') }}">Kembali ke Beranda</a></p>
</body>
</html>
