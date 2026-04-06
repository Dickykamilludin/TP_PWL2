<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
/*
// Passing Data ke View

// Array
Route::get('/sintaks', function () {

    $nama = 'Pajri';
    $alamat = 'Cilaku';

    return view('sintaks', [
        'nama' => $nama,
        'alamat' => $alamat
    ]);

});

// Compact
Route::get('/sintaks', function () {

    $nama = 'Pajri';
    $alamat = 'Cilaku';

    return view('sintaks', compact('nama','alamat'));

});

// With
Route::get('/sintaks', function () {

    $nama = 'Pajri';
    $alamat = 'Cilaku';

    return view('sintaks')
            ->with('nama', $nama)
            ->with('alamat', $alamat);

});



// Struktur Control

// IF
Route::get('/sintaks', function () {

    $nama = "Pajri";
    $nilai = 85;

    $mahasiswa = [
        "Andi",
        "Budi",
        "Citra",
        "Dina"
    ];

    return view('sintaks', compact('nama','nilai','mahasiswa'));

});

//Latihan
Route::get('/sintaks', function () {

    $buah = array("apel","jeruk","durian");

    return view('sintaks', compact('buah'));

});

*/

Route::get('/form', function(){
    return view('form');
});

Route::get('/Simpan_data', function(){
    $npm = request('npm');
    $nama = request('nama');

    return 'npm : '
})->name('create');