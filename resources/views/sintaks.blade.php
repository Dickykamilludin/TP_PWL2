<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sintaks</title>
</head>
<body>
{{-- 
    <!-- Passing data -->
    <h1>Data Mahasiswa</h1>

    <p>Nama : {{ $nama }}</p>
    <p>Alamat : {{ $alamat }}</p>


<!-- Struktur Control -->
<h2>Nama : {{ $nama }}</h2>
<h2>Nilai : {{ $nilai }}</h2> 



<!-- IF -->
@if($nilai >= 80)
    <p>Grade A</p>
@elseif($nilai >= 70)
    <p>Grade B</p>
@else
    <p>Grade C</p>
@endif

<hr>

<h3>Daftar Mahasiswa</h3>

<!-- FOREACH -->
@foreach($mahasiswa as $mhs)
    <p>{{ $mhs }}</p>
@endforeach

--}}
{{-- Latihan --}}
<h2>Daftar Buah</h2>

<ul>
@foreach($buah as $b)
    <li>{{ $b }}</li>
@endforeach
</ul>

</body>
</html>