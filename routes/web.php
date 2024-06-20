<?php

<<<<<<< HEAD
=======
use App\Http\Controllers\ProfileController;
>>>>>>> 191058c (Pratikum Terakhir)
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PasienController;

<<<<<<< HEAD
=======

>>>>>>> 191058c (Pratikum Terakhir)
Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
// route menggunakan get berarti mengambil fungsi di dalam controller
// route menggunakan resources berarti mengambil class
// route dengan menggunakan name atau by name
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/pegawai', [PegawaiController::class, 'index']);

// Pratikum Laravel ke-3
Route::get('/admin/kelurahan', [KelurahanController::class, 'index']);
Route::get('/admin/pasien', [PasienController::class, 'index']);

// Pratikum Laravel ke-4
Route::get('/admin/kelurahan/create', [KelurahanController::class, 'create']);
Route::post('/admin/kelurahan/store', [KelurahanController::class, 'store']);
Route::get('/admin/kelurahan/show/{id}', [KelurahanController::class, 'show']);
=======
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    route::get('/admin', [AdminController::class, 'index']);
    route::get('/admin/kelurahan', [KelurahanController::class, 'index']);
    route::get('/admin/pasien', [PasienController::class, 'index']);

    // Pegawai
    route::get('/pegawai', [PegawaiController::class, 'index']);

    // Kelurahan
    route::get('/admin/kelurahan', [KelurahanController::class, 'index']);
    route::get('/admin/kelurahan/create', [KelurahanController::class, 'create']);
    route::post('/admin/kelurahan/store', [KelurahanController::class, 'store']);
    route::get('/admin/kelurahan/show/{id}', [KelurahanController::class, 'show']);
    route::get('/admin/kelurahan/edit/{id}', [KelurahanController::class, 'edit']);
    route::put('/admin/kelurahan/update/{id}', [KelurahanController::class, 'update']);
    route::delete('/admin/kelurahan/destroy/{id}', [KelurahanController::class, 'destroy']);
    
    
    // Pasien
        Route::middleware('admin')->group(function() {
            route::get('/admin/pasien/create', [PasienController::class, 'create']);
            route::post('/admin/pasien/store', [PasienController::class, 'store']);
            route::get('/admin/pasien/show/{id}', [PasienController::class, 'show']);
            route::get('/admin/pasien/edit/{id}', [PasienController::class, 'edit']);
            route::Put('/admin/pasien/update/{id}', [PasienController::class, 'update']);
            route::delete('/admin/pasien/destroy/{id}', [PasienController::class, 'destroy']);
        });
});

require __DIR__.'/auth.php';



Route::get('/', function () {
    return view('welcome');
});
//route menggunakan get berati meangambil fungsi didalam controller
//route menggunakan resources berarti mengambil class
//route dengan menggunakan name atau by name
// route::get('/admin', [AdminController::class, 'index']);
// route::get('/pegawai', [PegawaiController::class, 'index']);

// Pratikum Laravel ke-3
// route::get('/admin/kelurahan', [KelurahanController::class, 'index']);
// route::get('/admin/pasien', [PasienController::class, 'index']);


// Pratikum Laravel ke-4
// route::get('/admin/kelurahan/create', [KelurahanController::class, 'create']);
// route::post('/admin/kelurahan/store', [KelurahanController::class, 'store']);
// route::get('/admin/kelurahan/show/{id}', [KelurahanController::class, 'show']);

// tugas Laravel ke-4
// route::get('/admin/pasien/create', [PasienController::class, 'create']);
// route::post('/admin/pasien/store', [PasienController::class, 'store']);
// route::get('/admin/pasien/show/{id}', [PasienController::class, 'show']);

// Praktikum ke-5
// route::get('/admin/kelurahan/edit/{id}', [KelurahanController::class, 'edit']);
// route::put('/admin/kelurahan/update/{id}', [KelurahanController::class, 'update']);
// route::delete('/admin/kelurahan/destroy/{id}', [KelurahanController::class, 'destroy']);

// Tugas Laravel ke-5
// route::get('/admin/pasien/edit/{id}', [PasienController::class, 'edit']);
// route::Put('/admin/pasien/update/{id}', [PasienController::class, 'update']);
// route::delete('/admin/pasien/destroy/{id}', [PasienController::class, 'destroy']);
>>>>>>> 191058c (Pratikum Terakhir)
