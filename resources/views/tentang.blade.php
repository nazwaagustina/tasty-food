    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tentang Kami - Tasty Food</title>
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

            .tentang-kami-header {
                background: url('Group 70@2x.png') no-repeat center center;
                background-size: cover;
                text-align: left;
                padding: 200px 0 100px 0;
                color: #fff;
            }

            .tentang-kami-header h1 {
                font-size: 3.5em;
                font-weight: bold;
                margin-bottom: 20px;
            }

            .tentang-kami-content {
                padding: 50px 0;
                background-color: #fff;
            }

            .tentang-kami-content h2 {
                font-weight: bold;
                margin-bottom: 20px;
            }

            .tentang-kami-content p {
                color: #555;
                margin-bottom: 20px;
            }

            .tentang-kami-content img {
                width: 100%;
                height: 350px;
                border-radius: 10px;
            }
            .visi-misi-section {
                padding: 50px 0;
                background-color: #fff;
            }
            
            .visi-misi-section h2 {
                font-weight: bold;
                margin-bottom: 20px;
            }
            
            .visi-misi-section p {
                color: #555;
                margin-bottom: 20px;
            }
            
            .visi-misi-section img {
                width: 100%;
                height: 250px; 
                object-fit: cover;
                border-radius: 10px;
                margin-bottom: 20px;
            }

            .image-container {
                display: flex;
                gap: 20px;
                margin-bottom: 20px;
            }

            .image-container img {
                flex: 1;
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
            .image-container {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
}

.image-container img {
    flex: 1;
    height: 250px; /* Atur ketinggian gambar agar konsisten */
    object-fit: cover;
    border-radius: 10px;
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
    <section class="tentang-kami-header">
        <div class="container">
            <h1>TENTANG KAMI</h1>
        </div>
    </section>

    <section class="tentang-kami-content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>TASTY FOOD</h2>
                    <p>{{ $about->tasty_food }}</p>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <img src="gmbr1.jpg" alt="Food Image 1" class="img-fluid">
                        </div>
                        <div class="col-md-6 mb-4">
                            <img src="gambar3.jpg" alt="Food Image 2" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="visi-misi-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6">
                    <div class="image-container">
                        <!-- Bagian gambar visi -->
                        <img src="gambar1.jpg" alt="Food Image 3" class="img-fluid">
                        <img src="food.jpg" alt="Food Image 4" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>Visi</h2>
                    <p>{{ $about->visi }}</p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-6">
                    <h2>Misi</h2>
                    <p>{{ $about->misi }}</p>
                </div>
                <div class="col-md-6">
                    <div class="image-container">
                        <!-- Bagian gambar misi -->
                        <img src="gambar2.jpg" alt="Food Image 5" class="img-fluid">
                    </div>
                </div>
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
            <small>Copyright ©2023 All rights reserved</small>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>