<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    NewsController, DosenController, MitraController, HomeController,
    PrestasiController, AdminAkademisController, AkademisController, 
    MahasiswaController, AuthAdminController, AdminController, ProfilController,
    SemuaBeritaController
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within the "web" middleware group.
|
*/

// Public Routes
Route::fallback(function () {
    return view('errors.404'); // Menampilkan halaman 404 custom
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::prefix('news')->name('news.')->group(function () {
    Route::get('/{id}', [NewsController::class, 'show'])->name('show');

});

Route::get('/search', [NewsController::class, 'search'])->name('search');
Route::get('/semua-berita', [SemuaBeritaController::class, 'berita'])->name('berita');


Route::prefix('mitra')->name('mitra.')->group(function () {
    Route::get('/list-mitra', [MitraController::class, 'rincian'])->name('rincian');
});


// Dosen Routes
Route::prefix('profil')->name('profil.')->group(function () {
    Route::get('/visi-misi', [ProfilController::class, 'index'])->name('index');
    Route::get('/struktural', [ProfilController::class, 'team'])->name('struktural');
    Route::get('/dosen-prodi', [ProfilController::class, 'dosen'])->name('dosen-prodi');
    Route::get('/pimpinan', [ProfilController::class, 'pimpinan'])->name('pimpinan');
});

Route::prefix('akademis')->name('akademis.')->group(function () {
    Route::get('/panduan-akademik', [AkademisController::class, 'panduan'])->name('panduan');
    Route::get('/alur-tugas-akhir', [AkademisController::class, 'alur'])->name('alur');
    Route::get('/{id}', [AdminAkademisController::class, 'show'])->name('show');

});

// Mahasiswa
Route::prefix('mahasiswa')->name('mahasiswa.')->group(function () {
    Route::get('/', [MahasiswaController::class, 'index'])->name('index');
});


// Prestasi Routes
Route::resource('prestasi', PrestasiController::class);

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [AuthAdminController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthAdminController::class, 'login'])->name('login.submit');
    Route::post('logout', [AuthAdminController::class, 'logout'])->name('logout');

    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('home');


        // News Routes
        Route::prefix('news')->name('news.')->group(function () {
            Route::get('/create', [NewsController::class, 'create'])->name('create');
            Route::post('/store', [NewsController::class, 'store'])->name('store');
            Route::get('/{id}', [NewsController::class, 'show'])->name('show');
            Route::post('/upload-image', [NewsController::class, 'upload'])->name('upload.image');

                    
            // Add the edit and update routes
            Route::get('/{id}/edit', [NewsController::class, 'edit'])->name('edit');
            Route::put('/{id}', [NewsController::class, 'update'])->name('update');
            Route::delete('/{id}', [NewsController::class, 'destroy'])->name('destroy');

        });

        Route::prefix('mitra')->name('mitra.')->group(function () {
            Route::get('/list-mitra', [MitraController::class, 'rincian'])->name('rincian');
            Route::get('/create', [MitraController::class, 'create'])->name('create');
            Route::post('/store', [MitraController::class, 'store'])->name('store');
            Route::get('/{id}', [ MitraController::class, 'show'])->name('show');

            // Add the edit and update routes
            Route::get('/{id}/edit', [MitraController::class, 'edit'])->name('edit');
            Route::put('/{id}', [MitraController::class, 'update'])->name('update');
            Route::delete('/{id}', [MitraController::class, 'destroy'])->name('destroy');
        });

        // Admin Akademis Routes
        Route::prefix('akademisadmin')->name('akademisadmin.')->group(function () {
            Route::get('/create', [AdminAkademisController::class, 'create'])->name('create');
            Route::post('/store', [AdminAkademisController::class, 'store'])->name('store');
            Route::post('/upload-image', [AdminAkademisController::class, 'upload'])->name('upload.image');

            // Add the edit and update routes
            Route::get('/{id}/edit', [AdminAkademisController::class, 'edit'])->name('edit');
            Route::put('/{id}', [AdminAkademisController::class, 'update'])->name('update');
            Route::delete('/{id}', [AdminAkademisController::class, 'destroy'])->name('destroy');

        });

        // Dosen Routes
        Route::prefix('dosen')->name('dosen.')->group(function () {
            Route::get('/create', [DosenController::class, 'create'])->name('create');
            Route::post('/store', [DosenController::class, 'store'])->name('store');
            Route::get('/{id}', [DosenController::class, 'show'])->name('show');
            Route::post('/upload-image', [DosenController::class, 'upload'])->name('upload.image');

            // Add the edit and update routes
            Route::get('/{id}/edit', [DosenController::class, 'edit'])->name('edit');
            Route::put('/{id}', [DosenController::class, 'update'])->name('update');
            Route::delete('/{id}', [DosenController::class, 'destroy'])->name('destroy');

        });

        // News Routes
        Route::prefix('news')->name('news.')->group(function () {
            Route::get('/create', [NewsController::class, 'create'])->name('create');
            Route::post('/store', [NewsController::class, 'store'])->name('store');
            Route::get('/{id}', [NewsController::class, 'show'])->name('show');
            Route::post('/upload-image', [NewsController::class, 'upload'])->name('upload.image');

                    
            // Add the edit and update routes
            Route::get('/{id}/edit', [NewsController::class, 'edit'])->name('edit');
            Route::put('/{id}', [NewsController::class, 'update'])->name('update');
        });


    });

    
});

