<?php

use App\Models\Login;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DatabaseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/login', function () {
//     return view('login');
// });

// Login Admin Routes
Route::get('/', function () {
    return redirect('/login');
});
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

// Logout Routes
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/pengaturanadmin', function () {
    return view('pengaturanadmin');
});
// Add Admin Routes
Route::get('/pengaturanadmin', [UserController::class, 'index'])->name('pengaturanadmin');

Route::get('/tambahadmin', [AdminController::class, 'create'])->name('tambahadmin')-> middleware('auth', 'superadmin');;
Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store')-> middleware('auth', 'superadmin');;

Route::get('/editadmin/{id}', [AdminController::class, 'edit'])->name('editadmin');
Route::put('/updateadmin/{id}', [AdminController::class, 'update'])->name('updateadmin')-> middleware('auth', 'superadmin');
Route::get('/deleteadmin/{id}', [AdminController::class, 'destroy'])->name('deleteadmin')-> middleware('auth', 'superadmin');

// Route::get('/databasependuduk', function () {
//     return view('databasependuduk');
// });

Route::get('/databasependuduk', [DatabaseController::class, 'index'])->name('databasependuduk.index');
Route::get('/tambahdatabase', [DatabaseController::class, 'create'])->name('tambahdatabase');
Route::post('/tambahdatabase', [DatabaseController::class, 'store'])->name('tambahdatabase.store');

// crud pool
Route::get('/editdatabase/{id}', [DatabaseController::class, 'edit'])->name('editdatabase');
Route::put('/updatedatabase/{id}', [DatabaseController::class, 'update'])->name('updatedatabase');
Route::get('/deletedatabase/{id}', [DatabaseController::class, 'destroy'])->name('deletedatabase');

Route::get('/feedback', function () {
    return view('rating');
});


Route::post('review-store', [BookingController::class, 'reviewstore'])->name('review.store');
Route::post('/admin/review', [BookingController::class, 'reviewstore'])->name('admin.review.store');
Route::resource('booking', BookingController::class);
