<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit About - Tasty Food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <style>
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Tentang Kami</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('about.update', $about->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="tasty_food">Tasty Food</label>
                <textarea name="tasty_food" id="tasty_food" class="form-control" rows="5">{{ old('tasty_food', $about->tasty_food) }}</textarea>
                @error('tasty_food')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="visi">Visi</label>
                <textarea name="visi" id="visi" class="form-control" rows="5">{{ old('visi', $about->visi) }}</textarea>
                @error('visi')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="misi">Misi</label>
                <textarea name="misi" id="misi" class="form-control" rows="5">{{ old('misi', $about->misi) }}</textarea>
                @error('misi')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('about.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
