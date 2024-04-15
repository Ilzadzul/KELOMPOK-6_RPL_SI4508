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

// Route::get('/pengaturanadmin', function () {
//     return view('pengaturanadmin');
// });
// Add Admin Routes
Route::get('/pengaturanadmin', [AdminController::class, 'index'])->name('pengaturanadmin')-> middleware('auth', 'superadmin');

Route::get('/tambahadmin', [AdminController::class, 'create'])->name('tambahadmin')-> middleware('auth', 'superadmin');
Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store')-> middleware('auth', 'superadmin');

Route::get('/editadmin/{id}', [AdminController::class, 'edit'])->name('editadmin')-> middleware('auth', 'superadmin');
Route::put('/updateadmin/{id}', [AdminController::class, 'update'])->name('updateadmin')-> middleware('auth', 'superadmin');
Route::delete('/deleteadmin/{id}', [AdminController::class, 'destroy'])->name('deleteadmin')-> middleware('auth', 'superadmin');

// Route::get('/databasependuduk', function () {
//     return view('databasependuduk');
// });
Route::get('/formulirpenduduk', [PendudukController::class, 'create'])->name('formulirpenduduk')-> middleware('auth');;
Route::post('/formulirpenduduk', [PendudukController::class, 'store'])->name('formulirpenduduk.store')-> middleware('auth');;


Route::get('/databasependuduk', [DatabaseController::class, 'index'])->name('databasependuduk.index');
Route::get('/tambahdatabase', [DatabaseController::class, 'create'])->name('tambahdatabase');
Route::post('/tambahdatabase', [DatabaseController::class, 'store'])->name('tambahdatabase.store');

// crud pool
Route::get('/editdatabase/{id}', [DatabaseController::class, 'edit'])->name('editdatabase');
Route::put('/updatedatabase/{id}', [DatabaseController::class, 'update'])->name('updatedatabase');
Route::get('/deletedatabase/{id}', [DatabaseController::class, 'destroy'])->name('deletedatabase');

Route::get('/feedback', [ReviewRatingController::class, 'showRatings'])->name('feedback');


Route::post('review-store', [BookingController::class, 'reviewstore'])->name('review.store');
Route::post('/admin/review', [BookingController::class, 'reviewstore'])->name('admin.review.store');
Route::resource('booking', BookingController::class);

Route::get('/review_ratings', [ReviewRatingController::class, 'index'])->name('review_ratings.index');
Route::delete('/review_ratings/{id}', [ReviewRatingController::class, 'destroy'])->name('review_ratings.destroy');

Route::get('/review_ratings', [ReviewRatingController::class, 'index']);

Route::get('/ratings', [ReviewRatingController::class, 'showRatings']);