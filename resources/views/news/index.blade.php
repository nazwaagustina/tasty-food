<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <title>Admin Dashboard - News List</title>
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
            border: none;
            color: white;
            text-align: center;
            width: 100%;
            padding: 10px 0;
            border-radius: 10px;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
        }

        .btn-logout:hover {
            background-color: #bd2130;
            transform: scale(1.05);
            box-shadow: 0px 8px 12px rgba(0, 0, 0, 0.2);
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
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="logo">
                <h1>Tasty Food</h1>
            </div>

            <a href="/" class="active">
                <i class="fa-solid fa-house"></i> Home
            </a>
            <a href="{{ route('news.index') }}" class="active">
                <i class="fa-solid fa-newspaper"></i> News
            </a>
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
            <h2>News List</h2>
            <div class="d-flex justify-content-end">
                <a href="{{ url('/berita') }}" class="btn btn-success">
                    <i class="fa-solid fa-eye"></i> View News
                </a>
                <button class="btn btn-primary ms-3" data-bs-toggle="modal" data-bs-target="#createNewsModal">
                    <i class="fa-solid fa-plus"></i> New
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
                        <th>Title</th>
                        <th>Content</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $n)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ asset("news-images/$n->image") }}" class="img-thumbnail" alt="news image" style="max-width: 100px;">
                            </td>
                            <td>{{ $n->title }}</td>
                            <td>{{ Str::limit($n->content, 50) }}</td>
                            <td>
                                <button class="btn btn-warning" onclick="showEditModal({{ json_encode($n) }})">
                                    <i class="fa-solid fa-edit"></i> Edit
                                </button>
                                <!-- Tombol Hapus Tetap -->
                                <button class="btn btn-danger" onclick="handleDelete({{ $n->id }})">
                                    <i class="fa-solid fa-trash"></i> Delete
                                </button>
                                <form action="{{ route('news.destroy', $n->id) }}" method="POST" id="form-delete-{{ $n->id }}" style="display: none;">
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
    <div class="modal fade" id="createNewsModal" tabindex="-1" aria-labelledby="createNewsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="createNewsModalLabel"><i class="fa-solid fa-plus"></i> News</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image" required>
                        </div>
                        <button type="submit" class="btn btn-success">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editNewsModal" tabindex="-1" aria-labelledby="editNewsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-warning text-white">
                    <h5 class="modal-title" id="editNewsModalLabel"><i class="fa-solid fa-edit"></i> Edit News</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editNewsForm" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="editTitle" class="form-label">Title</label>
                            <input type="text" class="form-control" id="editTitle" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="editContent" class="form-label">Content</label>
                            <textarea class="form-control" id="editContent" name="content" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="editImage" class="form-label">Image</label>
                            <img id="editImagePreview" class="img-thumbnail mb-3" style="max-width: 100px;" alt="news image">
                            <input type="file" class="form-control" id="editImage" name="image">
                        </div>
                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function handleDelete(id) {
            const form = document.getElementById(`form-delete-${id}`);
            if (confirm("Are you sure you want to delete this news item?")) {
                form.submit();
            }
        }
    </script>
    <script>
        function showEditModal(news) {
            // Set form action to the update route with the selected news ID
            document.getElementById("editNewsForm").action = `/news/${news.id}`;
            
            // Populate the modal with news data
            document.getElementById("editTitle").value = news.title;
            document.getElementById("editContent").value = news.content;
            document.getElementById("editImagePreview").src = `/news-images/${news.image}`;
    
            // Show the modal
            var editModal = new bootstrap.Modal(document.getElementById("editNewsModal"));
            editModal.show();
        }
    </script>
    
</body>

</html>
