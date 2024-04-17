<?php
namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function cariPendudukPelatihanX(Request $request)
    {
        // Mencari penduduk yang telah menyelesaikan pelatihan X
        $pendudukPelatihanX = Penduduk::where('pelatihan', 'X')->get();

        return view('hasil_pencarian', compact('pendudukPelatihanX'));
    }
}
