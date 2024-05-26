<?php

use App\Models\Login;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\ReviewRatingController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\TestUjiKemampuanController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RekomendasiPekerjaanController;
use App\Http\Controllers\JobController;


// Login Admin Routes
Route::get('/', function () {
    return redirect('/login');
});
Route::post('/reset-password/{user}', [ResetPasswordController::class, 'reset'])->name('reset-password');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

// Logout Routes
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/wilayah', function () {
    return view('wilayah');
});

Route::get('/lowongan', function () {
    return view('lowongan');
});

Route::get('/pengaturanadmin', [AdminController::class, 'index'])->name('pengaturanadmin')-> middleware('auth', 'superadmin');

Route::get('/tambahadmin', [AdminController::class, 'create'])->name('tambahadmin')-> middleware('auth', 'superadmin');
Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store')-> middleware('auth', 'superadmin');

Route::get('/editadmin/{id}', [AdminController::class, 'edit'])->name('editadmin')-> middleware('auth', 'superadmin');
Route::put('/updateadmin/{id}', [AdminController::class, 'update'])->name('updateadmin')-> middleware('auth', 'superadmin');
Route::delete('/deleteadmin/{id}', [AdminController::class, 'destroy'])->name('deleteadmin')-> middleware('auth', 'superadmin');

Route::get('/formulirpenduduk', [PendudukController::class, 'create'])->name('formulirpenduduk')-> middleware('auth');;
Route::post('/formulirpenduduk', [PendudukController::class, 'store'])->name('formulirpenduduk.store')-> middleware('auth');;


Route::get('/databasependuduk', [PendudukController::class, 'index'])->name('databasependuduk')-> middleware('auth');;
// Route::get('/tambahdatabase', [DatabaseController::class, 'create'])->name('tambahdatabase');
// Route::post('/tambahdatabase', [DatabaseController::class, 'store'])->name('tambahdatabase.store');

Route::get('/editformulirpenduduk/{id}', [PendudukController::class, 'edit'])->name('editpenduduk');
Route::put('/updatependuduk/{id}', [PendudukController::class, 'update'])->name('updatependuduk');
Route::get('/deletependuduk/{id}', [PendudukController::class, 'destroy'])->name('deletependuduk');

Route::get('/feedback', [ReviewRatingController::class, 'showRatings'])->name('feedback');


Route::post('review-store', [BookingController::class, 'reviewstore'])->name('review.store');
Route::post('/admin/review', [BookingController::class, 'reviewstore'])->name('admin.review.store');
Route::resource('booking', BookingController::class);

Route::get('/review_ratings', [ReviewRatingController::class, 'index'])->name('review_ratings.index');
Route::delete('/review_ratings/{id}', [ReviewRatingController::class, 'destroy'])->name('review_ratings.destroy');

Route::get('/review_ratings', [ReviewRatingController::class, 'index']);

Route::get('/ratings', [ReviewRatingController::class, 'showRatings']);
Route::get('/cari-penduduk-pelatihan-x', [SuperAdminController::class, 'cariPendudukPelatihanX']);



Route::get('/cari-penduduk', [SuperAdminController::class, 'cariPenduduk']);


Route::get('/kategoripekerjaan', function () {
    return view('kategoripekerjaan');
});

Route::get('/produksi-manufaktur', function () {
    return view('produksi-manufaktur');
})->name('produksi-manufaktur');

Route::get('/tambahkategori', function () {
    return view('tambahkategori');
})->name('tambahkategori');

Route::resource('contacts', ContactController::class);

// Routes for Test Uji Kemampuan
Route::get('/test-uji-kemampuan', [TestUjiKemampuanController::class, 'index'])->name('test-uji-kemampuan.index');
Route::get('/test-uji-kemampuan/create', [TestUjiKemampuanController::class, 'create'])->name('test-uji-kemampuan.create');
Route::post('/test-uji-kemampuan', [TestUjiKemampuanController::class, 'store'])->name('test-uji-kemampuan.store');
Route::get('/test-uji-kemampuan/{id}/edit', [TestUjiKemampuanController::class, 'edit'])->name('test-uji-kemampuan.edit');
Route::put('/test-uji-kemampuan/{id}', [TestUjiKemampuanController::class, 'update'])->name('test-uji-kemampuan.update');
Route::delete('/test-uji-kemampuan/{id}', [TestUjiKemampuanController::class, 'destroy'])->name('test-uji-kemampuan.destroy');

// Routes for Rekomendasi Pekerjaan
Route::get('/rekomendasi-pekerjaan', [RekomendasiPekerjaanController::class, 'index'])->name('rekomendasipekerjaan.index');
Route::get('/rekomendasi-pekerjaan/create', [RekomendasiPekerjaanController::class, 'create'])->name('rekomendasipekerjaan.create');
Route::post('/rekomendasi-pekerjaan', [RekomendasiPekerjaanController::class, 'store'])->name('rekomendasipekerjaan.store');
Route::get('/rekomendasi-pekerjaan/{id}/edit', [RekomendasiPekerjaanController::class, 'edit'])->name('rekomendasipekerjaan.edit');
Route::put('/rekomendasi-pekerjaan/{id}', [RekomendasiPekerjaanController::class, 'update'])->name('rekomendasipekerjaan.update');
Route::delete('/rekomendasi-pekerjaan/{id}', [RekomendasiPekerjaanController::class, 'destroy'])->name('rekomendasipekerjaan.destroy');

// Routes for Lowongan Pekerjaan
Route::resource('jobs', JobController::class);
