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

// Routing Landing Page
Route::get('/', function () {
    return view('AdminJurusan.login');
});

// Routing AdminJurusan
Route::get('/dosen-form-edit', function () {
    return view('AdminJurusan.dosen-form-edit');
});

Route::get('/dosen-form-tambah', function () {
    return view('AdminJurusan.dosen-form-tambah');
});

Route::get('/dosen-form-upload', function () {
    return view('AdminJurusan.dosen-form-upload');
});

Route::get('/dosen', function () {
    return view('AdminJurusan.dosen');
});

Route::get('/hasil', function () {
    return view('AdminJurusan.hasil');
});

Route::get('/hasilv2', function () {
    return view('AdminJurusan.hasilv2');
});

Route::get('/login', function () {
    return view('AdminJurusan.login');
});

Route::get('/index', function () {
    return view('AdminJurusan.index');
});

Route::get('/indexv2', function () {
    return view('AdminJurusan.indexv2');
});

Route::get('/jadwal-kuliah', function () {
    return view('AdminJurusan.jadwal-kuliah');
});

Route::get('/jadwal-kuliah-form-edit', function () {
    return view('AdminJurusan.jadwal-kuliah-form-edit');
});

Route::get('/jadwal-kuliah-form-tambah', function () {
    return view('AdminJurusan.jadwal-kuliah-form-tambah');
});

Route::get('/kkp', function () {
    return view('AdminJurusan.kkp');
});

Route::get('/mahasiswa', function () {
    return view('AdminJurusan.mahasiswa');
});

Route::get('/mahasiswa-form-edit', function () {
    return view('AdminJurusan.mahasiswa-form-edit');
});

Route::get('/mahasiswa-form-tambah', function () {
    return view('AdminJurusan.mahasiswa-form-tambah');
});

Route::get('/mahasiswa-form-upload', function () {
    return view('AdminJurusan.mahasiswa-form-upload');
});

Route::get('/proposal', function () {
    return view('AdminJurusan.proposal');
});

Route::get('/proses-jadwal', function () {
    return view('AdminJurusan.proses-jadwal');
});

Route::get('/proses-jadwalKP', function () {
    return view('AdminJurusan.proses-jadwalKP');
});

Route::get('/sidang', function () {
    return view('AdminJurusan.sidang');
});

