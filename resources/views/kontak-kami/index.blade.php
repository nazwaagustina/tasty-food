<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <title>Admin Dashboard - Contact List</title>
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
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 8px;
            margin-bottom: 20px;
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
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
            color: white;
        }

        .alert {
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
                padding: 10px;
            }

            .table {
                font-size: 14px;
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

            <a href="{{ route('news.index') }}">
                <i class="fa-solid fa-newspaper"></i> News
            </a>

            <a href="{{ route('gallery.index') }}">
                <i class="fa-solid fa-image"></i> Gallery
            </a>

            <a href="{{ route('about.index') }}">
                <i class="fa-solid fa-address-card"></i> About
            </a>

            <a href="{{ route('kontak-kami.index') }}">
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
            <h2>Contact Messages</h2>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="d-flex justify-content-end mb-3">
                <a href="{{ url('/kontak') }}" class="btn btn-success btn-sm">
                    <i class="fa-solid fa-eye"></i> View Contact
                </a>
            </div>

            <form action="{{ route('contact.info.update') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $contactInfo->email ?? '' }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control" value="{{ $contactInfo->phone ?? '' }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="location">Location</label>
                    <input type="text" name="location" placeholder="Masukkan alamat lokasi" value="{{ $contactInfo->location ?? '' }}" required>
                                    </div>
                <button type="submit" class="btn btn-primary">Update Contact Info</button>
            </form>

            <table class="table table-striped mt-4">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Subject</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $contact->subject }}</td>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->message }}</td>
                            <td>
                                <form action="{{ route('contact.destroy', $contact->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
