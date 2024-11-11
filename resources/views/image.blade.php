
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Kami - Tasty Food</title>
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

        .navbar-brand,
        .navbar-nav .nav-link {
            color: #fff !important;
        }

        .galeri-kami-header {
            background: url('Group 70@2x.png') no-repeat center center;
            background-size: cover;
            text-align: left;
            padding: 200px 0 100px 0;
            color: #fff;
        }

        .galeri-kami-header h1 {
            font-size: 3.5em;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .galeri-kami-content {
            padding: 60px 0;
            background-color: #f9f9f9;
        }

        .galeri-kami-content h2 {
            font-weight: bold;
            margin-bottom: 20px;
        }

        .galeri-kami-content p {
            color: #555;
            margin-bottom: 50px;
        }

        .carousel-inner img {
            width: 100%;
            height: 450px;
            object-fit: cover;
            border-radius: 20px;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
        }

        .gallery img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
        }

        @media (max-width: 1000px) {
            .gallery {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .gallery {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .gallery {
                grid-template-columns: 1fr;
            }
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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
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

    <section class="galeri-kami-header">
        <div class="container">
            <h1>GALERI KAMI</h1>
        </div>
    </section>

    <section class="galeri-kami-content">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="gmbr2.jpg" class="d-block w-100" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img src="galeri2.jpg" class="d-block w-100" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img src="gambar5.jpg" class="d-block w-100" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <section class="galeri-kami-content">
        <div class="container">
            <div class="gallery">
                @foreach ($galleries as $gallery)
                    <div>
                        <img src="{{ asset('storage/'.$gallery->image) }}" alt="Gallery Image">
                    </div>
                @endforeach
            </div>
    
            <!-- Paginasi -->
            <div class="d-flex justify-content-center mt-4">
                {{ $galleries->links() }} <!-- Ini akan menampilkan link paginasi -->
            </div>
        </div>
    </section>
    

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Tasty Food</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
                        <li><a href="/kontak">Kontak Kami</a></li>
                        <li><a href="#">Servis</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contact Info</h5>
                    <ul>
                        <li><i class="fas fa-envelope me-2"></i> tastyfood@gmail.com</li>
                        <li><i class="fas fa-phone me-2"></i> +62 812 3456 7890</li>
                        <li><i class="fas fa-map-marker-alt me-2"></i> Kota Bandung, Jawa Barat</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <small>Copyright ©2024 All rights reserved</small>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

