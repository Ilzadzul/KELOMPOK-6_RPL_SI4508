<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestUjiKemampuan; 

class TestUjiKemampuanController extends Controller
{
    public function index()
    {
        // Mengambil semua data test uji kemampuan
        $tests = TestUjiKemampuan::all();
        return view('test-uji-kemampuan.index', compact('tests'));
    }

    public function create()
    {
        // Menampilkan form untuk membuat test uji kemampuan baru
        return view('test-uji-kemampuan.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Membuat objek TestUjiKemampuan baru dan menyimpannya ke dalam database
        TestUjiKemampuan::create($request->all());

        return redirect()->route('test-uji-kemampuan.index')->with('success', 'Test uji berhasil ditambahkan.');
    }

    public function edit(TestUjiKemampuan $test)
    {
        // Menampilkan form untuk mengedit test uji kemampuan yang ada
        return view('test-uji-kemampuan.edit', compact('test'));
    }

    public function update(Request $request, TestUjiKemampuan $test)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Memperbarui data test uji kemampuan yang ada
        $test->update($request->all());

        return redirect()->route('test-uji-kemampuan.index')->with('success', 'Test uji diperbarui.');
    }

    public function destroy(TestUjiKemampuan $test)
    {
        // Menghapus data test uji kemampuan yang ada
        $test->delete();

        return redirect()->route('test-uji-kemampuan.index')->with('success', 'Test uji  berhasil dihapus.');
    }
}
