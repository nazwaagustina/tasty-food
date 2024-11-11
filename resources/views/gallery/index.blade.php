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
            <h2>Gallery List</h2>
            <div class="d-flex justify-content-end">
                <a href="{{ url('/image') }}" class="btn btn-success"><i class="fa-solid fa-eye"></i> Views Gallery </a>

            </a>

            <button class="btn btn-primary ms-3" data-bs-toggle="modal" data-bs-target="#createGalleryModal">
                <i class="fa-solid fa-plus"></i> Gallery
            </button>
               
            </div>
           

            @if (Session::has('success'))
            <div class="alert alert-success mt-3">
                <b>{{ Session::get('success') }}</b>
            </div>
            @elseif (Session::has('error'))
            <div class="alert alert-danger mt-3">
                <b>{{ Session::get('error') }}</b>
            </div>
            @endif

            <hr>

            <table class="table table-striped table-bordered mt-3">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Preview</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($galleries as $gallery)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                        <img src="{{ asset('storage/' . $gallery->image) }}" class="img-thumbnail" alt="gallery image" style="max-width: 100px;">
                        </td>
                        <td>
                            
                            <button class="btn btn-danger" onclick="handleDelete({{ $gallery->id }})">
                                <i class="fa-solid fa-trash"></i> Delete
                            </button>
                            <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST" id="form-delete-{{ $gallery->id }}" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="createGalleryModal" tabindex="-1" aria-labelledby="createGalleryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="createGalleyModalLabel"><i class="fa-solid fa-plus"></i> Gallery</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
            
                        <div class="mb-3">
                            <h5>Gambar</h5>
                            <input type="file" name="image" id="image" class="mb-3">
                        </div>
                        <button type="submit" class="btn btn-success">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function handleDelete(id) {
            if (confirm('Hapus data ini?')) {
                document.getElementById(`form-delete-${id}`).submit();
            }
        }
        </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXlHU7Dk8sNh2NfRisH4oPA2Q72Hj5Qpq7Kj8P6VL/3ojk5V0Rwdhv1pFVkB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhG81rKjQ2a8byQeTsFELH7F5p2WWnpARi9Wv3tvHfy6Sz9Ore6kMR1z+8nb" crossorigin="anonymous">
    </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        function handleDelete(id) {
            const confirmation = confirm('Are you sure you want to delete this item?');
            if (confirmation) {
                document.getElementById('form-delete-' + id).submit();
            }
        }
    </script>
</body>

</html>
