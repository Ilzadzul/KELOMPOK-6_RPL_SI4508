<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

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

Route::get('/', function () {
    return view('account');
});

Route::post('review-store', 'BookingController@reviewstore')->name('review.store');
Route::post('/admin/review', 'BookingController@store')->name('admin.review.store');

Route::get('/feedback', function () {
    return view('rating');
});
