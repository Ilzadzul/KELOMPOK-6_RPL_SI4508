<?php

namespace App\Http\Controllers;

use App\Models\JadwalBimbinganKarir;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class JadwalBimbinganKarirController extends Controller
{
    public function index()
    {
        $items = JadwalBimbinganKarir::latest()->get();
        return view('jadwal-bimbingan-karir.index', [
            'title' => 'Jadwal Bimbingan Karir',
            'items' => $items
        ]);
    }

    public function create()
    {
        $data_penduduk = Penduduk::orderBy('namalengkap', 'ASC')->get();
        return view('jadwal-bimbingan-karir.create', compact('data_penduduk'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'penduduk_id' => 'required',
            'waktu' => 'required|date',
            'tempat' => 'required',
            'nama_mentor' => 'required',
            'status' => 'required'
        ]);

        try {
            $data = request()->all();
            JadwalBimbinganKarir::create($data);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return redirect()->route('admin.jadwal-bimbingan-karir.index')
            ->with('success', 'Jadwal Bimbingan Karir berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $item = JadwalBimbinganKarir::findOrFail($id);
        return view('jadwal-bimbingan-karir.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'waktu' => 'required|date',
            'tempat' => 'required',
            'nama_mentor' => 'required',
            'status' => 'required'
        ]);

        try {
            $data = request()->all();
            $item = JadwalBimbinganKarir::findOrFail($id);
            $item->update($data);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return redirect()->route('admin.jadwal-bimbingan-karir.index')
            ->with('success', 'Jadwal Bimbingan Karir berhasil diupdate.');
    }

    public function destroy($id)
    {
        try {
            $test = JadwalBimbinganKarir::findOrFail($id);
            $test->delete();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return redirect()->route('admin.jadwal-bimbingan-karir.index')
            ->with('success', 'Jadwal Bimbingan Karir berhasil dihapus.');
    }
}
