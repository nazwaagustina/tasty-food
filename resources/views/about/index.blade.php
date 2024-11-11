<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <title>Admin Dashboard - Gallery List</title>
    <style>
        body {
            background: linear-gradient(to right, #f8f9fa, #e9ecef);
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        .wrapper {
            display: flex;
            flex: 1;
        }

        /* Styling sidebar untuk tampilan yang lebih elegan */
        .sidebar {
            width: 250px;
            background: linear-gradient(to right, #343a40, #495057);
            padding: 20px;
            height: 100vh;
            position: sticky;
            top: 0;
            flex-shrink: 0;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.2);
            transition: width 0.3s ease;
        }

        .sidebar:hover {
            width: 270px;
        }

        .sidebar .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar .logo img {
            max-width: 120px;
            border-radius: 50%;
            margin-bottom: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }

        .sidebar h1 {
            font-size: 24px;
            color: #ffcd39;
            font-weight: bold;
            text-align: center;
            letter-spacing: 2px;
            text-transform: uppercase;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            background: linear-gradient(to right, #ffcd39, #fd7e14);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .sidebar a {
            color: #ffffff;
            text-decoration: none;
            display: block;
            padding: 10px 20px;
            border-radius: 10px;
            margin-bottom: 15px;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease, transform 0.3s ease;
            background: linear-gradient(to right, #495057, #343a40);
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar a:hover {
            background-color: #ffcd39;
            color: #343a40;
            transform: translateX(5px);
            box-shadow: 0px 8px 12px rgba(0, 0, 0, 0.2);
        }

        .sidebar .active {
            background-color: #ffcd39;
            color: #ffffff;
        }

        .sidebar .bottom-links {
            margin-top: auto;
        }

        .btn-logout {
            background-color: #dc3545;
            border-color: #dc3545;
            color: white;
            text-align: center;
            width: 100%;
            padding: 12px 20px;
            border-radius: 10px;
            margin-top: 20px;
            font-size: 16px;
            transition: background-color 0.3s ease, color 0.3s ease;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
        }

        .btn-logout:hover {
            background-color: #bd2130;
            color: white;
        }

        .main-content {
            flex: 1;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            margin-left: 10px;
        }

        .main-content h2 {
            font-weight: bold;
            font-size: 26px;
            color: #343a40;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 8px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            color: white;
        }

        .table {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .table thead {
            background-color: #343a40;
            color: #ffffff;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f8f9fa;
        }

        .table-striped tbody tr:hover {
            background-color: #e9ecef;
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
            color: white;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .btn-warning:hover {
            background-color: #e0a800;
            color: white;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
            color: white;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .btn-danger:hover {
            background-color: #bd2130;
            color: white;
        }
        .sidebar-title {
    font-size: 28px;
    font-weight: bold;
    color: #ffcd39;
    text-align: center;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin: 0;
    padding: 0;
    background: linear-gradient(to right, #ffcd39, #fd7e14);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

.sidebar-title span {
    color: #ffffff;
    background-color: #fd7e14;
    padding: 5px 10px;
    border-radius: 5px;
    box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.2);
}

        .main-content h2 {
            font-weight: bold;
            font-size: 26px;
            color: #343a40;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 8px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            color: white;
        }

        .table {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .table thead {
            background-color: #343a40;
            color: #ffffff;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f8f9fa;
        }

        .table-striped tbody tr:hover {
            background-color: #e9ecef;
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
            color: white;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .btn-warning:hover {
            background-color: #e0a800;
            color: white;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
            color: white;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .btn-danger:hover {
            background-color: #bd2130;
            color: white;
        }
        .sidebar-title {
    font-size: 28px;
    font-weight: bold;
    color: #ffcd39;
    text-align: center;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin: 0;
    padding: 0;
    background: linear-gradient(to right, #ffcd39, #fd7e14);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
}

.sidebar-title span {
    color: #ffffff;
    background-color: #fd7e14;
    padding: 5px 10px;
    border-radius: 5px;
    box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.2);
}
.card {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    background-color: #fff;
}

.card-body {
    margin-top: 20px;
}

.card h2 {
    font-size: 24px;
    font-weight: bold;
}

.form-group {
    margin-bottom: 20px;
}

.form-control {
    border-radius: 5px;
    padding: 10px;
    border: 1px solid #ccc;
}

.btn {
    padding: 10px 20px;
    font-size: 16px;
}

.container {
    margin-top: 50px;
}
.card {
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 10px;
    margin-bottom: 20px;
}

.card-body {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.card h2 {
    font-size: 28px;
    font-weight: 600;
    color: #333;
    text-align: center;
    margin-bottom: 20px;
}

.card-content {
    display: grid;
    grid-template-columns: 1fr;
    gap: 20px;
}

.card p {
    font-size: 16px;
    line-height: 1.6;
    color: #555;
    text-align: justify;
    background-color: #fff;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
}

.form-group {
    margin-bottom: 25px;
}

.form-group label {
    font-size: 16px;
    color: #555;
    margin-bottom: 5px;
    display: block;
}

.form-control {
    border-radius: 8px;
    padding: 12px;
    border: 1px solid #ddd;
    width: 100%;
    font-size: 16px;
    transition: all 0.3s ease;
}

.form-control:focus {
    border-color: #5d9cec;
    box-shadow: 0 0 8px rgba(93, 156, 236, 0.3);
}

.btn {
    padding: 12px 25px;
    font-size: 16px;
    border-radius: 8px;
    color: #fff;
    background-color: #007bff;
    border: none;
    transition: background-color 0.3s ease, transform 0.3s ease;
    cursor: pointer;
}

.btn:hover {
    background-color: #4a89dc;
    transform: translateY(-3px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
}

.container {
    margin-top: 50px;
    padding: 0 20px;
}

.container h1 {
    text-align: center;
    font-size: 36px;
    color: #333;
    margin-bottom: 30px;
    font-weight: 700;
}

@media (min-width: 768px) {
    .card-content {
        grid-template-columns: 1fr 1fr 1fr;
    }
}


    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="logo">
                <h1 class="sidebar-title">Tasty Food</h1>
            </div>
        <a href="/" class="active">
    <i class="fa-solid fa-house"></i> Home
</a>


            <a href="{{ route ('news.index') }}" class="active">
            <i class="fa-solid fa-newspaper"></i> News            </a>
              

            <a href="{{ route('gallery.index') }}" class="active">
    <i class="fa-solid fa-image"></i> Gallery
</a>
<a href="{{ route('about.index') }}" class="active">
    <i class="fa-solid fa-address-card"></i> About
</a>
<a href="{{ route('kontak-kami.index') }}" class="active">
    <i class="fa-solid fa-address-book"></i> Contact
</a>

            <div class="bottom-links">    
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn-logout">
                        <i class="fa-solid fa-sign-out-alt"></i> Logout
                    </button>
                </form>
            </div>
        </div>

        <div class="main-content">
            <div class="container mt-5">
                <h2>About List</h2>
                <div class="d-flex justify-content-end mb-3">
                    <a href="{{ url('/tentang') }}" class="btn btn-success">
                        <i class="fa-solid fa-eye"></i> View About
                    </a>
                </div>


                    <div class="card">
                        <div class="card-body">
                            <h2>Tasty Food</h2>
                            <p>{{ $about->tasty_food}}</p>
                
                            <h2>Visi</h2>
                            <p>{{ $about->visi }}</p>
                
                            <h2>Misi</h2>
                            <p>{{ $about->misi }}</p>
                
                            <a href="{{ route('about.edit', $about->id) }}" class="btn btn-primary">Edit</a>
                        </div>
                    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-f5shyIn4SYekZ6YbL5nd5J67l+5LPF6c0v34q20/Ly4n4u1rYv/1pPIosGyzBLt1Z" crossorigin="anonymous">
    </script>
</body>

</html>
