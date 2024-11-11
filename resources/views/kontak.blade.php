    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kontak Kami - Tasty Food</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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

            .kontak-kami-header {
                background: url('Group 70@2x.png') no-repeat center center;
                background-size: cover;
                text-align: left;
                padding: 200px 0 100px 0;
                color: #fff;
            }

            .kontak-kami-header h1 {
                font-size: 3.5em;
                font-weight: bold;
                margin-bottom: 20px;
            }

            .kontak-kami-content {
                padding: 50px 0;
                background-color: #fff;
            }

            .kontak-kami-content h2 {
                font-weight: bold;
                margin-bottom: 20px;
            }

            .kontak-kami-content p {
                color: #555;
                margin-bottom: 20px;
            }

            .kontak-kami-content img {
                width: 100%;
                height: 350px;
                border-radius: 10px;
            }

            .contact-form {
                background-color: #fff;
                padding: 0;
                width: 100%;
            }

            .contact-form input, .contact-form textarea {
                width: 100%;
                padding: 15px;
                margin-bottom: 20px;
                border: 1px solid #ddd;
                border-radius: 5px;
            }

            .contact-form button {
                background-color: #000;
                color: #fff;
                padding: 15px;
                border: none;
                border-radius: 5px;
                width: 100%;
                font-size: 16px;
            }

            .contact-info {
                display: flex;
                justify-content: space-between;
                text-align: center;
                padding: 50px 0 0;
            }

            .contact-info div {
                flex: 1;
            }

            .contact-info i {
                font-size: 24px;
                margin-bottom: 10px;
                background-color: #000;
                color: #fff;
                padding: 15px;
                border-radius: 50%;
            }

            .contact-info p {
                margin: 5px 0;
                font-size: 14px;
                color: #555;
            }

            .map-container {
        background-color: #f8f8f8; /* Warna background, sesuaikan jika perlu */
        padding: 50px 0;
        margin-top: 50px;
    }

    .map-wrapper {
        max-width: 1140px; /* Sesuaikan dengan lebar maksimum container Anda */
        margin: 0 auto;
        padding: 0 15px;
    }

    .map-container iframe {
        width: 100%;
        height: 500px;
        border: none;
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
        </style>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
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

        <section class="kontak-kami-header">
            <div class="container">
                <h1>KONTAK KAMI</h1>
            </div>
        </section>

        <section class="kontak-kami-content">
            <div class="container">
                <h2>KONTAK KAMI</h2>
                <form class="contact-form" action="{{ route('contact.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <input type="text" name="subject" placeholder="Subject" required>
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="col-md-6">
                <textarea name="message" rows="5" placeholder="Message" required></textarea>
            </div>
        </div>
        <button type="submit">KIRIM</button>
    </form>

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif
    @php
    $contactInfo = App\Models\ContactInformation::first();
    @endphp

    <div class="contact-info">
    <div>
        <i class="fas fa-envelope"></i>
        <p>EMAIL</p>
        <p>{{ $contactInfo->email ?? 'Not set' }}</p>
    </div>
    <div>
        <i class="fas fa-phone"></i>
        <p>PHONE</p>
        <p>{{ $contactInfo->phone ?? 'Not set' }}</p>
    </div>
    <div>
        <i class="fas fa-map-marker-alt"></i>
        <p>LOCATION</p>
        <p>{{ $contactInfo->location ?? 'Not set' }}</p>
    </div>
    </div>

            </div>
        </section>`

        <section class="map-container">
            <div class="map-wrapper">
                <iframe
                    src="https://www.google.com/maps/embed/v1/place?q={{ urlencode($contactInfo->location) }}&key=AIzaSyAIO1zo2jaeGgVx7prp-SsT9lqIjH8GLxI"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>
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