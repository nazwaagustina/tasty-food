<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Kami - Tasty Food</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: transparent;
            position: absolute;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .navbar-brand, .navbar-nav .nav-link {
            color: #fff !important;
        }

        .berita-kami-header {
            background: url('Group 70@2x.png') no-repeat center center;
            background-size: cover;
            text-align: left;
            padding: 200px 0 100px 0;
            color: #fff;
        }

        .berita-kami-header h1 {
            font-size: 3.5em;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .berita-kami-content {
            padding: 50px 0;
            background-color: #fff;
        }

        .berita-kami-content h2 {
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .berita-kami-content p {
            color: #555;
            margin-bottom: 20px;
        }

        .content-card {
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 30px;
        }

        .content-card-body {
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .content-card h2 {
            font-size: 1.5em;
            margin-bottom: 15px;
        }

        .content-card p {
            font-size: 1em;
            color: #777;
        }

        .btn-read-more {
            background-color: #000;
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-transform: uppercase;
            border-radius: 5px;
            text-decoration: none;
            align-self: start;
        }

        .content-card img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 10px;
        }

        @media (min-width: 768px) {
            .content-card {
                display: flex;
                flex-direction: row;
                align-items: center;
            }

            .content-card img {
                width: 50%;
                height: 500px;
            }

            .content-card-body {
                width: 50%;
                padding-left: 30px;
            }
        }

        .berita-lainnya, .more-news {
            padding: 80px 0;
            background-color: #f9f9f9;
        }

        .berita-lainnya h2, .more-news h2 {
            font-weight: bold;
            margin-bottom: 70px;
            text-align: center;
        }
       

        .card {
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 20px;
            transition: all 0.3s ease-in-out;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .card-body {
            padding: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
        }

        .card-title {
            font-size: 1.25rem;
            margin-bottom: 10px;
            font-weight: bold;
            color: #333;
        }

        .card-text {
            font-size: 1rem;
            color: #555;
            margin-bottom: 15px;
        }

        .btn-card-read-more {
            color: #ff8c00;
            border: none;
            text-transform: lowercase;
            font-weight: bold;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
        }
        footer {
            background-color: #000;
            color: #fff;
            padding: 50px 0 20px;
        }

        footer h5 {
            font-size: 18px;
            margin-bottom: 20px;
        }

        footer ul {
            list-style-type: none;
            padding: 0;
        }

        footer ul li {
            margin-bottom: 10px;
        }

        footer ul li a {
            color: #fff;
            text-decoration: none;
        }

        .footer-social-icons a {
            margin-right: 10px;
            font-size: 18px;
        }
        .pagination {
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: .25rem;
}

.pagination li {
    margin: 0 5px;
}

.pagination li a, .pagination li span {
    padding: 10px 15px;
    border: 1px solid #dee2e6;
    color: #ff8c00;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
}

.pagination li.active span {
    background-color: #ff8c00;
    border-color: #ff8c00;
    color: #fff;
}

.pagination li a:hover {
    background-color: #ff8c00;
    color: white;
}

.pagination li.disabled span {
    color: #ccc;
}

        
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/">TASTY FOOD</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="/">HOME</a></li>
                <li class="nav-item"><a class="nav-link" href="/tentang">TENTANG</a></li>
                <li class="nav-item"><a class="nav-link" href="/berita">BERITA</a></li>
                <li class="nav-item"><a class="nav-link" href="/image">GALERI</a></li>
                <li class="nav-item"><a class="nav-link" href="/kontak">KONTAK</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="berita-kami-header">
    <div class="container">
        <h1>BERITA KAMI</h1>
    </div>
</section>

<section class="berita-kami-content">
    <div class="container">
        <div class="content-card">
            <img src="gmbr3.jpg" alt="Food Image">
            <div class="content-card-body">
                <h2>APA SAJA MAKANAN KHAS NUSANTARA?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.</p>
                <a href="#" class="btn-read-more">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
</section>


<section class="more-news">
    <div class="container">
        <h2>Berita Lainnya</h2>
        <div class="row">
            @foreach($news as $new)
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="{{ asset('news-images/' . $new->image) }}" class="card-img-top" alt="{{ $new->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $new->title }}</h5>
                        <p class="card-text">{{ Str::limit($new->content, 100) }}</p>
                        <a href="{{ route('news.show', $new->id) }}" class="btn-card-read-more">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $news->links() }}
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4 mb-md-0">
                <h5>Tasty Food</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="footer-social-icons mt-3">
                    <a href="#" class="text-light me-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-light"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="col-md-2 mb-4 mb-md-0">
                <h5>Useful links</h5>
                <ul>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Hewan</a></li>
                    <li><a href="#">Galeri</a></li>
                    <li><a href="#">Testimonial</a></li>
                </ul>
            </div>
            <div class="col-md-2 mb-4 mb-md-0">
                <h5>Privacy</h5>
                <ul>
                    <li><a href="#">Karir</a></li>
                    <li><a href="/tentang">Tentang Kami</a></li>
                    <li><a href="/kontak">Kontak</a></li>
                    <li><a href="#">Services</a></li>
                </ul>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
                <h5>Our Menu</h5>
                <ul>
                    <li><a href="#">Menu Nusantara</a></li>
                    <li><a href="#">Menu Asia</a></li>
                    <li><a href="#">Menu Barat</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>