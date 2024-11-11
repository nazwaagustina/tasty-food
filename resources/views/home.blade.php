<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Food</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            overflow-x: hidden;
            overflow-y: auto;
            position: relative;

        }
        .container {
            max-width: 1250px;
            margin-left: 25px;
            padding: 40px;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 40px 0;
            margin-left: 5px;
            margin-right: 510px;
        }
        .logo {
            font-weight: bold;
            font-size: 30px;
        }
        nav {
            display: flex;
            margin-left: 10px;
        }
        nav a {
            margin-right: 24px;
            text-decoration: none;
            color: black;
            font-size: 14px;
            text-transform: uppercase;
        

        }
        .content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px 0;
            position: relative;
        }
        .text-content {
            max-width: 55%;
            position: relative;
            margin-right: 300px;
        }

        .line {
            width: 20px;
            height: 2px;
            background-color: black;
            margin-bottom: 20px;
            position: absolute;
            top: -5px;
            left: 5px;
        }

        .text-content h1 {
            margin-top: 20px;
            margin-right: 20px;
            position: relative;
        }

        p {
            margin: 40px 0;
        }
        .btn {
            display: inline-block;
            background-color: black;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            text-transform: uppercase;
        }
        .image-content {
            width: 68%;
            position: absolute;
            right: -310px;
            top: -310px;
        }
        .image-content img {
            width: 100%;
            border-radius: 50%;
        }
        .tentang-kami-content {
            text-align: center;
            padding: 50px;
            background-color: #fff;
        }

        .tentang-kami-content h2 {
            font-weight: bold;
            margin-bottom: 20px;
        }

        .tentang-kami-content p {
            max-width: 800px;
            margin: 0 auto 40px;
            color: #555;
        }

        .bg-image-container {
            background-image: url('Group 70.png');
            background-size: cover;
            background-position: center;
            padding: 140px 0px;
            display: flex;
            justify-content: center;
            
            flex-direction: column;
        }

        .food-sections {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 10px;
            flex-wrap: wrap;
        }
        .food-item {
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            padding: 20px;
            width: 250px;
            position: relative;
        }
        .food-item img {
            border-radius: 80%;
            width: 180px;
            height: 180px;
            object-fit: cover;
            position: absolute;
            top: -100px;
            left: 50%;
            transform: translateX(-50%);
        }
        .food-item h3 {
            margin-top: 80px;
            margin-bottom: 10px;
            font-size: 1.2em;
            font-weight: bold; 
        }
        .food-item p {
            font-size: 0.9em;
            color: #666;
        }
        
        button {
            padding: 10px 20px;
            background-color: black;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: grey;
        }
        .line {
          border-top: 3px solid #000;
          width: 150px;
          margin: 0 auto 20px;
        }

        #berita-kami {
    padding: 70px;
    max-width: 1200px;
    margin: 0 auto;
}

#berita-kami h2 {
    text-align: center;
    font-size: 2em;
    margin-bottom: 60px;
    font-weight: bold;
}

.berita-container {
    display: grid;
    grid-template-areas:
        "large large small1 small2"
        "large large small3 small4";
    grid-gap: 20px;
}

.berita-card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    display: flex;
    flex-direction: column;
}

.berita-card.large {
    grid-area: large;
}

.berita-card:nth-child(2) {
    grid-area: small1;
}

.berita-card:nth-child(3) {
    grid-area: small2;
}

.berita-card:nth-child(4) {
    grid-area: small3;
}

.berita-card:nth-child(5) {
    grid-area: small4;
}

.berita-card img {
    width: 100%;
    height: auto;
    max-height: 150px;
    object-fit: cover;
}

.berita-card.large img {
    max-height: 300px;
}

.berita-card-content {
    padding: 20px;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

.berita-card-content h3 {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
}

.berita-card-content p {
    color: #777;
    font-size: 14px;
    margin-bottom: 20px;
}

.berita-card-content a {
    color: #ff6f61;
    text-decoration: none;
    font-weight: bold;
}

.berita-card-content a:hover {
    text-decoration: underline;
}
#gallery-kami {
            background-color: #ffffff; 
            padding: 15px; 
            margin: 0px 0; 
            border-radius: 10px; 
        }

        .gallery-container {
            width: 80%;
            max-width: 1200px;
            margin: 50px auto;
            text-align: center;
        }
        .gallery-container h2 {
            font-size: 2em;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 5px;
        }
        .gallery-item {
            position: relative;
            width: 100%;
            padding-bottom: 100%;
            border-radius: 10px;
            overflow: hidden;
        }
        .gallery-item img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .gallery-button {
            margin-top: 20px;
        }
        .gallery-button button {
            background-color: #000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }
        .gallery-button button:hover {
            background-color: #444;
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


        @media (max-width: 768px) {
    header {
        flex-direction: column;
        align-items: flex-start;
    }
    nav {
        flex-direction: column;
    }
    .content {
        flex-direction: column;
        align-items: flex-start;
    }
    .image-content {
        position: static;
        width: 100%;
        margin: 20px 0;
    }
    .text-content {
        max-width: 100%;
        margin-right: 0;
    }
    .food-sections {
        flex-direction: column;
        align-items: center;
    }
    .berita-container {
        grid-template-areas:
            "large"
            "small1"
            "small2"
            "small3"
            "small4";
    }
    .gallery-grid {
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    }
}
@media (max-width: 768px) {
    .nav-links {
        display: none;
    }
    .menu-icon {
        display: block;
        cursor: pointer;
    }
}
        
    </style>
</head>
<body>
  
<div class="container">
        <header>
            <div class="logo">TASTY FOOD</div>
            <nav>
                <a href="#">Home</a>
                <a href="/tentang">Tentang</a>
                <a href="/berita">Berita</a>
                <a href="/image">Galeri</a>
                <a href="/kontak">Kontak</a>
            </nav>
        </header>
        
        <div class="content">
            <div class="text-content">
                <div class="line"></div>
                <h1>HEALTHY<br><strong>TASTY FOOD</strong></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.</p>
                <a href="/tentang" class="btn">Tentang Kami</a>
            </div>
            <div class="image-content">
                <img src="img-4.png" alt="Tasty Food">
            </div>
        </div>
    </div>
    <div id="tentang-kami" class="tentang-kami-content">
        <h2>TENTANG KAMI</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.</p>
<div class="line"></div>
    </div>
    <div class="bg-image-container">
        <div class="food-sections">
            <div class="food-item">
                <img src="img-1.png" alt="Food 1">
                <h3>LOREM IPSUM</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo,</p>
            </div>
            <div class="food-item">
                <img src="img-2.png" alt="Food 2">
                <h3>LOREM IPSUM</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo,</p>
            </div>
            <div class="food-item">
                <img src="img-3.png" alt="Food 3">
                <h3>LOREM IPSUM</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo,</p>
            </div>
            <div class="food-item">
                <img src="img-4.png" alt="Food 4">
                <h3>LOREM IPSUM</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo,</p>
            </div>
        </div>
    </div>
<div id="berita-kami" class="berita-kami">
        <h2>BERITA KAMI</h2>
        <div class="background"></div>
        <div class="berita-container">
            <div class="berita-card large">
                <img src="gambar1.jpg" alt="Berita Image 1">
                <div class="berita-card-content">
                    <h3>LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus et suscipit. Curabitur facilisis lectus vitae eros malesuada eleifend. Mauris eget tellus odio. Phasellus vestibulum turpis ac sem commodo, at posuere eros consequat.</p>
                    <a href="#">Baca selengkapnya</a>
                </div>
            </div>
            <div class="berita-card">
                <img src="gambar2.jpg" alt="Berita Image 2">
                <div class="berita-card-content">
                    <h3>LOREM IPSUM</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo,</p>
                    <a href="#">Baca selengkapnya</a>
                </div>
            </div>
            <div class="berita-card">
                <img src="gambar3.jpg" alt="Berita Image 3">
                <div class="berita-card-content">
                    <h3>LOREM IPSUM</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo,</p>
                    <a href="#">Baca selengkapnya</a>
                </div>
            </div>
            <div class="berita-card">
                <img src="gambar4.jpg" alt="Berita Image 4">
                <div class="berita-card-content">
                    <h3>LOREM IPSUM</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo,</p>
                    <a href="#">Baca selengkapnya</a>
                </div>
            </div>
            <div class="berita-card">
                <img src="gambar5.jpg" alt="Berita Image 5">
                <div class="berita-card-content">
                    <h3>LOREM IPSUM</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo,</p>
                    <a href="#">Baca selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    <div id="gallery-kami">
    <div class="gallery-container">
        <h2>GALERI KAMI</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="gmbr1.jpg" alt="Food 1">
            </div>
            <div class="gallery-item">
                <img src="gmbr2.jpg" alt="Food 2">
            </div>
            <div class="gallery-item">
                <img src="gmbr3.jpg" alt="Food 3">
            </div>
            <div class="gallery-item">
                <img src="gmbr4.jpg" alt="Food 4">
            </div>
            <div class="gallery-item">
                <img src="gmbr5.jpg" alt="Food 5">
            </div>
            <div class="gallery-item">
                <img src="gmbr6.jpg" alt="Food 6">
            </div>
        </div>
        <div class="gallery-button">
            <a href="/image" class="btn">LIHAT LEBIH BANYAK</a>
        </div>
    </div>
</div>

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
