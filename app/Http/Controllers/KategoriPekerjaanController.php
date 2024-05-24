<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriPekerjaan;
use Illuminate\Support\Facades\Log;

class KategoriPekerjaanController extends Controller
{
    // Menampilkan semua kategori pekerjaan
    public function index(Request $request)
    {
        $kategoriPekerjaan = kategoripekerjaan::where('nama_kategori', 'LIKE')
        ->orwhere('deskripsi', 'LIKE');
        return view('kategoripekerjaan'); // Ubah view menjadi 'kategoripekerjaan.index'
    }

    // Menampilkan form untuk menambahkan kategori pekerjaan baru
    public function create()
    {
        return view('tambahkategori'); // Ubah view menjadi 'kategoripekerjaan.create'
    }

    // Menyimpan kategori pekerjaan baru ke dalam database
    public function store(Request $request)
    {

        Log::info('Store Request Data: ' . json_encode($request->all()));

        $request->validate([
            'nama_kategori' => 'required',
            'deskripsi' => 'required',
        ]);

        Log::info('Validated Data: ' . json_encode($request->all()));

        KategoriPekerjaan::create([
        // return redirect()->route('kategoripekerjaan') // Ubah rute menjadi 'kategoripekerjaan.index'
        //     ->with('success', 'Kategori pekerjaan berhasil ditambahkan.');
            'nama_kategori' => $request->input('nama_kategori'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        Log::info('Data Created');

        return redirect()-> route('kategoripekerjaan')
            ->with('success', 'Data added successfully.');

    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    
    // Menghapus kategori pekerjaan
    public function destroy($id)
    {
        //
    }
}
