<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// URL index
Route::get('/', function () {
    return view('dashboard');
});
//URL about
Route::get('/about', function () {
    return 'ini halaman about';
});
//URL contact
//Route::get('/contact', function () {
//    return view('contact');
//});
$profill = [
    'name' => 'Renaldi Nurmazid',
    'phone' => '087843236707',
    'domisili' => 'Subang'
];
Route::view('/profill', 'profill',$profill);


//URL Version data
// Ex.loclhost:8000/berita/kasus-penculikan-anak
Route::get('/berita/{id}/komentar/{komentar}', function ($id, $komentar) {
    return 'Berita ID : ' . $id . 
    '<br> Komentar Berita : ' . $komentar;
});

//URL Halaman Administrator
//Route::get('/dashboard', function () {
  //  return 'Ini halaman dasboard';
//});

//Route::get('/product', function () {
//    return 'Ini Produk';
//});

//Route::get('/staff', function () {
  //  return 'Ini halaman staff';
//});

//Route::get('/costumer', function () {
  //  return 'Ini Pelanggan';
//});
//URL Prefik
Route::prefix('administrator')->group(function () {
    Route::get('/dashboard', function () {
        return 'Ini Dashboard';
    });
    Route::get('/product', function () {
        return 'Ini Produk';
    });
    Route::get('/customor', function () {
        return 'Ini Pelanggan';
    });
    Route::get('/staff', function () {
        return 'Ini Staff';
    });
});

//URl PROFIL
$profil = 
[
    'Nama' => 'Renaldi Nurmazid',
    'Kelas' => 'XI RPL 1',
    'Tanggal Lahir' => '16 September 2005'
];
Route::view('/profil', 'profil',$profil);


//URL CONTOH TUGAS
Route::prefix('smkn1subang')->group(function () {
    Route::get('/profil', function () {
        return 'Ini biodata';
    });
    Route::get('/sejarah', function () {
        return 'Ini Sejarah SMKN 1 Subang';
    });
    Route::get('/visimisi', function () {
        return 'Ini VISIMISI';
    });
    Route::get('/jurusan', function () {
        return 'Ini Jurusan di SMKN 1 SUBANG';
    });
    Route::get('/prestasi', function () {
        return 'Ini Prestasi SMKN 1 SUBANG';
    });
    Route::get('/contact', function () {
        return 'Contact <br> SMKN 1 SUBANG';
    });
});