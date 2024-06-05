<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PasienController;

Route::get('/', function () {
    return view('welcome');
});
//route menggunakan get berati meangambil fungsi didalam controller
//route menggunakan resources berarti mengambil class
//route dengan menggunakan name atau by name
route::get('/admin', [AdminController::class, 'index']);
route::get('/pegawai', [PegawaiController::class, 'index']);

// Pratikum Laravel ke-3
route::get('/admin/kelurahan', [KelurahanController::class, 'index']);
route::get('/admin/pasien', [PasienController::class, 'index']);


// Pratikum Laravel ke-4
route::get('/admin/kelurahan/create', [KelurahanController::class, 'create']);
route::post('/admin/kelurahan/store', [KelurahanController::class, 'store']);
route::get('/admin/kelurahan/show/{id}', [KelurahanController::class, 'show']);

// tugas Laravel ke-4
route::get('/admin/pasien/create', [PasienController::class, 'create']);
route::post('/admin/pasien/store', [PasienController::class, 'store']);
route::get('/admin/pasien/show/{id}', [PasienController::class, 'show']);
