 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Data Mahasiswa</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 </head>
 <body>
     <div class="container text-center p-4">
    <h1 class="mb-3">Data Mahasiswa</h1>
    <div class="row">
    <div class="m-auto">
        <ol class="list-group">
            @forelse($mahasiswas as $mahasiswa)
            <li class="list-group-item">
                {{ $mahasiswa->nama_lengkap }} ({{ $mahasiswa->nim }}),
                Tanggal lahir: {{ $mahasiswa->tanggal_lahir}},
                Alamat: {{ $mahasiswa->alamat }}
            </li>
            @empty
            <div class="alert alert-drak d-inline-block">Tidak ada data</div>
            @endforelse
        </ol>
    </div>
    </div>
     </div>
 </body>
 </html>