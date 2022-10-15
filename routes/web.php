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

Route::get('/', function () {
    $dsn = [
        'Adhi Rizal, MT',
        'Aji Primajaya, S.Si., M.Kom',
        'Arip Solehudin, M.Kom',
        'Asep Jamaludin, S.Si., M.Kom',
        'Betha Nurina Sari, M.Kom',
        'Carudin, M.Kom',
        'Dadang Yusup, M.Kom',
        'Intan Purnamasari, M.Kom',
        'Purwantoro, M.Kom',
        'Rini Mayasari, M.Kom',
    ];
    return view('dosen') ->with('dosen',$dsn);
});

Route::get('/matkul', function () {
    $mk = [
        'Technopreneur',
        'Data Mining',
        'Cloud Coumputing',
        'Pemprograman Berbasis Mobile',
        'Pemprograman Berbasis Web',
        'Framework pemprograman Web',
        'Blockchain',
        'Jaringan Komputer',
        'Embedded System Enteligence System',
        'Metode Numerik',
    ];
    return view('matakuliah')->with('matkul',$mk);;
});
Route::get('/mahasiswa', function () {
    $mhs = [
        'Frise Anesha Lutia',
        'Aina Salsabila',
        'Aisa Nurfajri',
        'Andini Nafasya Aprillia',
        'Farel Tearsense',
        'Ekra Dehia',
        'Aditya Sanovriyanto',
        'Danu Aldri',
        'Khaira Vincy',
        'jammy Ulael',
    ];
    return view('mahasiswa')->with('mahasiswa',$mhs);
});