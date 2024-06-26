<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RekomendasiPekerjaan;

class RekomendasiPekerjaanController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $pekerjaans = RekomendasiPekerjaan::where('nama_pekerjaan', 'LIKE', '%'.$keyword.'%')
            ->orWhere('lokasi_pekerjaan', 'LIKE', '%'.$keyword.'%')
            ->paginate(5);

        return view('rekomendasipekerjaan.index', ['pekerjaans' => $pekerjaans, 'keyword' => $keyword]);
    }

    public function create()
    {
        return view('rekomendasipekerjaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_penduduk' => 'required',
            'hasil_test_uji' => 'required',
            'nama_pekerjaan' => 'required',
            'lokasi_pekerjaan' => 'required',
            'deskripsi_pekerjaan' => 'nullable',
        ]);

        try {
            RekomendasiPekerjaan::create([
                'nama_penduduk' => $request->input('nama_penduduk'),
                'hasil_test_uji' => $request->input('hasil_test_uji'),
                'nama_pekerjaan' => $request->input('nama_pekerjaan'),
                'lokasi_pekerjaan' => $request->input('lokasi_pekerjaan'),
                'deskripsi_pekerjaan' => $request->input('deskripsi_pekerjaan'),
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return redirect()->route('rekomendasipekerjaan.index')
            ->with('success', 'Rekomendasi pekerjaan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pekerjaan = RekomendasiPekerjaan::findOrFail($id);
        return view('rekomendasipekerjaan.edit', compact('pekerjaan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_penduduk' => 'required',
            'hasil_test_uji' => 'required',
            'nama_pekerjaan' => 'required',
            'lokasi_pekerjaan' => 'required',
            'deskripsi_pekerjaan' => 'nullable',
        ]);

        try {
            $pekerjaan = RekomendasiPekerjaan::findOrFail($id);
            $pekerjaan->update([
                'nama_penduduk' => $request->input('nama_penduduk'),
                'hasil_test_uji' => $request->input('hasil_test_uji'),
                'nama_pekerjaan' => $request->input('nama_pekerjaan'),
                'lokasi_pekerjaan' => $request->input('lokasi_pekerjaan'),
                'deskripsi_pekerjaan' => $request->input('deskripsi_pekerjaan'),
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return redirect()->route('rekomendasipekerjaan.index')
            ->with('success', 'Rekomendasi pekerjaan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        try {
            $pekerjaan = RekomendasiPekerjaan::findOrFail($id);
            $pekerjaan->delete();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return redirect()->route('rekomendasipekerjaan.index')
            ->with('success', 'Rekomendasi pekerjaan berhasil dihapus.');
    }
}
