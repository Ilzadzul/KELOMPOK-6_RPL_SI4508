<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestUjiKemampuan;
use Illuminate\Validation\Rule;

class TestUjiKemampuanController extends Controller
{
    public function indexAwal(Request $request)
    {
        $keyword = $request->keyword;
        $tests = TestUjiKemampuan::where('nama_test', 'LIKE', '%' . $keyword . '%')
            ->orWhere('tanggal_pelaksanaan', 'LIKE', '%' . $keyword . '%')
            ->orWhere('tempat_pelaksanaan', 'LIKE', '%' . $keyword . '%')
            ->orWhere('anggota_test', 'LIKE', '%' . $keyword . '%')
            ->paginate(5);

        return view('testujikemampuan.index', ['tests' => $tests, 'keyword' => $keyword]);
    }

    public function index()
    {
        $items = TestUjiKemampuan::orderBy('nama_test', 'ASC')->get();
        return view('testujikemampuan.index', [
            'title' => 'Test Uji Kemampuan',
            'items' => $items
        ]);
    }

    public function create()
    {
        return view('testujikemampuan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_test' => 'required',
            'tanggal_pelaksanaan' => 'required|date',
            'tempat_pelaksanaan' => 'required',
            'daftar_anggota_test' => 'nullable',
        ]);

        try {
            TestUjiKemampuan::create([
                'nama_test' => $request->input('nama_test'),
                'tanggal_pelaksanaan' => $request->input('tanggal_pelaksanaan'),
                'tempat_pelaksanaan' => $request->input('tempat_pelaksanaan'),
                'daftar_anggota_test' => $request->input('daftar_anggota_test'),
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return redirect()->route('testujikemampuan.index')
            ->with('success', 'Test uji kemampuan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $test = TestUjiKemampuan::findOrFail($id);
        return view('testujikemampuan.edit', compact('test'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_test' => 'required',
            'tanggal_pelaksanaan' => 'required|date',
            'tempat_pelaksanaan' => 'required',
            'daftar_anggota_test' => 'nullable',
        ]);

        try {
            $test = TestUjiKemampuan::findOrFail($id);
            $test->update([
                'nama_test' => $request->input('nama_test'),
                'tanggal_pelaksanaan' => $request->input('tanggal_pelaksanaan'),
                'tempat_pelaksanaan' => $request->input('tempat_pelaksanaan'),
                'daftar_anggota_test' => $request->input('daftar_anggota_test'),
            ]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return redirect()->route('testujikemampuan.index')
            ->with('success', 'Test uji kemampuan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        try {
            $test = TestUjiKemampuan::findOrFail($id);
            $test->delete();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        return redirect()->route('testujikemampuan.index')
            ->with('success', 'Test uji kemampuan berhasil dihapus.');
    }
}
