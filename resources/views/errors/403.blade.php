<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 Forbidden - Akses Ditolak</title>
    
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: sans-serif;
            background-color: #1a202c; /* Warna latar gelap agar serasi */
            color: white;
            overflow: hidden;
        }
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            text-align: center;
            padding: 20px;
        }
        img {
            max-width: 100%;
            max-height: 70vh; /* Batasi tinggi gambar agar tombol muat */
            object-fit: contain;
            border-radius: 8px;
        }
        a {
            margin-top: 24px;
            padding: 12px 24px;
            background-color: #f97316; /* Warna oranye seperti di gambar */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.2s;
        }
        a:hover {
            background-color: #ea580c;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('images/forbiden 403.jpg') }}" alt="403 Akses Ditolak">
        
        <a href="{{ url('/dashboard') }}">Kembali ke Dashboard</a>
    </div>
</body>
</html>