<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\Kelurahans;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    public function index(Request $request)
{
    // Mengambil keyword dari request
    $keyword = $request->keyword;

    // Inisialisasi variabel untuk hasil pencarian
    $kelurahans = collect();
    $pendudukGroupedByKelurahan = collect();

    if (is_numeric($keyword)) {
        // Jika keyword adalah nomor KTP
        $pendudukResults = Penduduk::with('kelurahan')->where('No_ktp', 'LIKE', '%' . $keyword . '%')->get();
        
        if ($pendudukResults->isNotEmpty()) {
            // Mengambil ID kelurahan yang ditemukan dari hasil pencarian penduduk
            $kelurahanIds = $pendudukResults->pluck('nama_kelurahan')->unique();

            // Mengambil data kelurahan berdasarkan ID yang ditemukan dari hasil pencarian penduduk
            $kelurahans = Kelurahans::with('penduduk')->whereIn('id', $kelurahanIds)->get();

            // Mengelompokkan penduduk berdasarkan nama kelurahan yang ditemukan
            $pendudukGroupedByKelurahan = $pendudukResults->groupBy('nama_kelurahan');
        }
    } else {
        // Jika keyword adalah nama kelurahan
        $kelurahans = Kelurahans::with('penduduk')->where('name', 'LIKE', '%' . $keyword . '%')->get();

        if ($kelurahans->isNotEmpty()) {
            // Mengambil ID kelurahan yang ditemukan
            $kelurahanIds = $kelurahans->pluck('id');

            // Mengelompokkan penduduk berdasarkan nama kelurahan yang ditemukan
            $pendudukGroupedByKelurahan = Penduduk::whereIn('nama_kelurahan', $kelurahanIds)->get()->groupBy('nama_kelurahan');
        }
    }

    // Mengembalikan view dengan data yang diperlukan
    return view('wilayah', [
        'kelurahans' => $kelurahans,
        'pendudukGroupedByKelurahan' => $pendudukGroupedByKelurahan,
        'keyword' => $keyword,
    ]);
}

    public function create()
    {
        return view('tambahkelurahan');
    }
    public function store(Request $request)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'name' => 'required|string',
            'deskripsi' => 'nullable|string',
        ]);

        // Simpan data ke dalam database
        Kelurahans::create([
            'name' => $request->input('name'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        return redirect()->route('kelurahan.index')
            ->with('success', 'Kelurahan baru berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kelurahan = Kelurahans::find($id);
        return view ('editkelurahan', compact('kelurahan'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'name' => 'required|string',
            'deskripsi' => 'nullable|string',
        ]);

        $kelurahan = Kelurahans::findOrFail($id);
        $oldName = $kelurahan->name; // Store the old name

        // Update data in the database
        $kelurahan->update([
            'name' => $request->input('name'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        Penduduk::where('nama_kelurahan', $oldName)
        ->update(['nama_kelurahan' => $request->input('name')]);

        $kelurahans = Kelurahans::all();
        $pendudukGroupedByKelurahan = Penduduk::all()->groupBy('nama_kelurahan');
        return redirect()->route('kelurahan.index', compact('kelurahans', 'pendudukGroupedByKelurahan'))
            ->with('success', 'Kelurahan berhasil diperbarui');
    }

    public function destroy($id)
    {
    // Find the kelurahan by ID and delete it
    $kelurahan = Kelurahans::findOrFail($id);
    $kelurahan->delete();

    return redirect()->route('kelurahan.index')
        ->with('success', 'Kelurahan berhasil dihapus');
    }
}
