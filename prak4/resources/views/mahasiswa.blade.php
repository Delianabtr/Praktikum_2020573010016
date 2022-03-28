<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data Mahasiswa</title>
</head>
<body>
    {{-- Menampilkan data --}}
    <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block"> 
        {{ $nama }}</h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
        {{ $nilai  }}</h1>

        {{-- Menampilkan data 2 --}}
    {{-- <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block"> 
        {!! $nama !!}</h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
        {!! $nilai  !!}</h1> --}}

    {{-- Kondisi If Else --}}
    {{-- <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block"> 
        {{  $nama  }}</h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
        {{ $nilai }}</h1>
            <br>
                @if (($nilai >= 0) and ($nilai < 50))
                <div class="alert alert-danger d-lg-inline-block">
                    Maaf, anda tidak lulus
                </div>
                @elseif (($nilai >= 50) and ($nilai <= 100))
                <div class="alert alert-success d-lg-inline-block">
                    Selamat, anda lulus
                </div>
                @else
                <div class="alert alert-dark d-inline-block">
                    Nilai tidak valid
                </div>
                @endif
    </div> --}}

    {{-- Kondisi Switch --}}
    {{-- <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block"> 
        {!! $nama !!}</h1>
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
        {!! $nilai !!}</h1>
    <br>
    @switch($nilai)
        @case(0)
        <div class="alert alert-danger d-inline-block">Tidak ikut ujian</div>
            @break
        @case(75)
        <div class="alert alert-success d-inline-block">Lumayan</div>
            @break
        @case(100)
        <div class="alert alert-success d-inline-block">Sempurna</div>
            @break
        @default
        <div class="alert alert-dark d-inline-block">Nilai tidak valid</div>
    @endswitch
    </div> --}}

    {{-- Kondisi perulangan for --}}
    {{-- <div class="container text-center mt-3 pt-3 bg-white">
        @for ($i = 0; $i < 5; $i++)
        <div class="alert alert-info d-inline-block">
        Laravel
        </div>
        @endfor
    </div> --}}

    {{-- Kondisi perulangan for 2 --}}
    {{-- <div class="container text-center mt-3 pt-3 bg-white">
        @for ($i = 0; $i < 5; $i++)
        <div class="alert alert-info d-inline-block">
        {{ $i }}
        </div>
        @endfor
    </div> --}}

    {{-- Perulangan While --}}
    {{-- <div class="container text-center mt-3 pt-3 bg-white">
        <?php $i = 0; ?>
        @while ($i < 5)
        <div class="alert alert-info d-inline-block">
            {{ $i }}
        </div>
        <?php $i++ ?>
        @endwhile
    </div> --}}

    {{-- Perulangan Foreach --}}
    {{-- <div class="container text-center mt-3 pt-3 bg-white">
        <h1 class="bg-dark px-3 py-1 text-white d-inline-block"> 
            {{  $nama  }}</h1>
            <br>
            @Foreach ($nilai as $val)
            <div class="alert alert-info d-inline-block">
                {{ $val }}
            </div>
            @endforeach
        </div> --}}

        {{-- Perulangan foreach 2 --}}
        {{-- <div class="container text-center mt-3 pt-3 bg-white">
            <h1 class="bg-dark px-3 py-1 text-white d-inline-block"> 
                {!! $nama !!}</h1>
                <br>
                @Foreach ($nilai as $val)
                @if (($val >= 0) and ($val < 50))
                <div class="alert alert-danger d-inline-block">
                    {{ $val }}
                </div>
                @elseif (($val >= 50) and ($val <= 100))
                <div class="alert alert-success d-inline-block">
                    {{ $val }}
                </div>
                @endif
                @endforeach
        </div> --}}

        {{-- Perulangan Forelse --}}
        {{-- <div class="container text-center mt-3 pt-3 bg-white">
            <h1 class="bg-dark px-3 py-1 text-white d-inline-block"> 
                {{  $nama  }}</h1>

                <br>
                @Forelse ($nilai as $val)
                @if (($val >= 0) and ($val < 50))
                <div class="alert alert-danger d-inline-block">
                    {{ $val }}
                </div>

                @elseif (($val >= 50) and ($val <= 100))
                <div class="alert alert-success d-inline-block">
                    {{ $val }}
                </div>

                @endif
                @empty
                <div class="alert alert-dark d-inline-block">
                    Tidak ada data.....</div>
                @endforelse
        </div> --}}

        {{-- Perintah continue dan break --}}
        {{-- <div class="container text-center mt-3 pt-3 bg-white">
            <h1 class="bg-dark px-3 py-1 text-white d-inline-block"> 
                {{  $nama  }}</h1>
                <br>
                @Forelse ($nilai as $val)
                @if ($val < 50)
                @break
                @endif
                <div class="alert alert-success d-inline-block">
                    {{ $val }}
                </div>
                @endforeach
            </div>

</body>
</html> --}}