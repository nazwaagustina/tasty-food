<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $news->title }}</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .news-container {
            background-color: #fff;
            padding: 40px;
            margin-top: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }

        .news-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        .news-image {
            display: block;
            width: 80%;
            max-height: 450px; 
            object-fit: cover;
            margin: 0 auto 30px auto; 
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .news-content {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.8;
            margin-bottom: 40px;
            text-align: justify;
        }

        .back-to-news-btn {
            background-color: #ff8c00;
            color: #fff;
            padding: 10px 20px;
            text-transform: uppercase;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            display: block;
            width: max-content;
            margin: 0 auto;
        }

        .back-to-news-btn:hover {
            background-color: #e67e00;
        }

        .footer {
            margin-top: 50px;
            padding: 20px 0;
            background-color: #000;
            color: #fff;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="news-container">
            <h1 class="news-title">{{ $news->title }}</h1>
            <img src="{{ asset('news-images/' . $news->image) }}" alt="{{ $news->title }}" class="news-image">
            <p class="news-content">{{ $news->content }}</p>
            <a href="/berita" class="back-to-news-btn">Kembali ke Berita</a>
        </div>
    </div>

    <div class="footer">
        &copy; 2024 Tasty Food. All Rights Reserved.
    </div>

</body>
</html>
