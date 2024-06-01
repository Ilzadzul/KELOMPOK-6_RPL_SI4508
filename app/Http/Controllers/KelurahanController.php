<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\Kelurahans;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    public function index()
    {
        $kelurahans = Kelurahans::with('penduduk')->get();
        $pendudukGroupedByKelurahan = Penduduk::all()->groupBy('nama_kelurahan');

        // Return view with kelurahans data
        return view('wilayah', [
            'kelurahans' => $kelurahans,
            'pendudukGroupedByKelurahan' => $pendudukGroupedByKelurahan,

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
