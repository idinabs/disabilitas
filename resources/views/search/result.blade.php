<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>
<body>
    
@extends('home')

@section('content')
<title>Detail Berita</title>
    <style>
        /* Reset dan pengaturan dasar */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f1f1f1; /* Warna latar belakang yang lebih terang */
        }

        .container {
            max-width: 1200px;
            margin: auto;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        .content {
            display: flex;
            gap: 20px; /* Meningkatkan jarak antara konten utama dan berita terbaru */
        }

        /* Konten Utama */
        .news-detail {
            flex: 3;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .news-title {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .news-meta {
            font-size: 14px;
            color: #555;
            margin-bottom: 15px;
        }

        .news-image {
            display: flex;
            justify-content: center; /* Center the image horizontally */
            margin-bottom: 15px; /* Add some spacing below the image */
        }

        .news-image img {
            width: 100%; /* Take full width of the parent */
            height: auto; /* Maintain aspect ratio */
            border-radius: 5px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease; /* Transisi untuk efek zoom */
        }

        .news-image img:hover {
            transform: scale(1.05); /* Zoom in saat hover */
        }

        .news-content {
            font-size: 16px;
            line-height: 1.6;
        }

        /* Style for images inserted via CKEditor */
        .news-content img {
            width: 100%; /* Full width of the container */
            height: auto; /* Height will adjust based on aspect ratio */
            border-radius: 5px; /* Rounded corners */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Box shadow effect */
            margin-bottom: 15px; /* Spacing below the image */
        }

        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: #007BFF;
            text-decoration: none;
        }

        /* Sidebar Berita Terbaru */
        .latest-news {
            flex: 1;
            padding: 15px;
            background-color: #f4f4f4;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .latest-news h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .latest-news ul {
            list-style-type: none;
            padding: 0;
        }

        .latest-news li {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .latest-news li a {
            display: flex;
            align-items: center;
            color: #333;
            text-decoration: none;
        }

        .latest-news li img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            margin-right: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .latest-news li a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .content {
                flex-direction: column;
                gap: 20px; /* Kurangi jarak pada layar kecil */
            }
        
        }
    </style>

    <div class="container">
       
        <main class="content">
            <!-- Konten Utama -->
            <article class="news-detail">


            @if(isset($query))
                <h2>Results for: "{{ $query }}"</h2>
            @endif

            <ul>
                @forelse ($news as $item)
                    <li>
                        <h3>{{ $item->title }}</h3>
                        <p style="font-size: 16px; font-family: PT Sans; font-weight: 400;" >
                            <a href="{{ route('news.show', $item->id) }}">
                                {{ Str::limit($item->deskripsi, 100) }} &nbsp;
                            </a>
                        </p>
                    </li>
                @empty
                    <li>No news found.</li>
                @endforelse
            </ul></article>
            
            <!-- Berita Terbaru -->
            <aside class="latest-news">
                <h3>Berita Terbaru</h3>
                @foreach($mahasiswa as $item)

                <ul>
                    <li>
                        @if($item->image)
                        <a href="#">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="Thumbnail Berita 2">
                            {{ $item->title }}

                        </a>
                        @endif
                    </li>
                    
                </ul>
                @endforeach
            </aside>
        </main>
    </div>
@endsection
</body>
</html>
