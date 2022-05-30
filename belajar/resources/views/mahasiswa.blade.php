<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Data Mahasiswa</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/mahasiswa" class="nav-link active">Data Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a href="/dosen" class="nav-link">Data Dosen</a>
                </li>
                <li class="nav-item">
                    <a href="/gallery" class="nav-link">Gallery</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container txet-center mt-3 p-4 bg-white">
        <h1 class="mb-3">Data Mahasiswa</h1>
        <div class="row">
            <div class="col-sm-8" col-md-6 m-auto>
                <ol class="list-group">
                    @forelse ($mahasiswa as $val)
                        <li class="list-group-item">{{ $val }}</li>
                    @empty
                        <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
                    @endforelse
                </ol>
            </div>
        </div>
    </div>
    <footer class="bg-dark py-4 text-white mt-4">
        <div class="container">
            Sistem Informasi Mahasiswa | Copyright (c) {{ date('Y') }} Teknik Informatika
        </div>
    </footer>
</body>

</html>
