<?php

namespace App\Http\Controllers;

use App\Models\HasilTest;
use App\Models\Penduduk;
use App\Models\TestUjiKemampuan;
use Illuminate\Http\Request;

class RiwayatTestController extends Controller
{
    public function index()
    {
        $test_id = request('test_id');
        $penduduk_id = request('penduduk_id');
        $items = HasilTest::whereNotNull('id');
        $data_test = TestUjiKemampuan::orderBy('nama_test', 'ASC')->get();
        $data_penduduk = Penduduk::orderBy('namalengkap', 'ASC')->get();

        if ($test_id)
            $items->where('test_uji_kemampuan_id', $test_id);
        if ($penduduk_id)
            $items->where('penduduk_id', $penduduk_id);
        $data = $items->latest()->get();
        return view('riwayat-test.index', [
            'title' => 'Riwayat Test Uji Kemampuan',
            'items' => $data,
            'data_test' => $data_test,
            'data_penduduk' => $data_penduduk
        ]);
    }

    public function show($id)
    {
        $item = HasilTest::findOrFail($id);
        return view('riwayat-test.show', [
            'title' => 'Detail hasil',
            'item' => $item
        ]);
    }
}
