<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReviewBintang; // Ganti ini
use Illuminate\Support\Facades\DB;

class ReviewRatingController extends Controller
{
    // Menampilkan isi database
    public function index()
    {
        $reviewRatings = ReviewBintang::all(['comments', 'star_rating']); // Dan ini
        return view('rating', compact('reviewRatings'));
    }

    // Menghapus isi database
    public function destroy($id)
    {
        DB::table('review_ratings')->where('id', $id)->delete(); // Dan ini
        return redirect('/feedback')->with('success', 'Review Rating deleted successfully');
    }
    public function showRatings()
    {
    $reviewRatings = ReviewBintang::all(); // Ambil semua data review dan rating
    return view('rating', compact('reviewRatings')); // Kirim data ke view
    }


}
