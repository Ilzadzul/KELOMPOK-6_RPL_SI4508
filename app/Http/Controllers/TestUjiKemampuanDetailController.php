<?php

namespace App\Http\Controllers;

use App\Models\TestUjiKemampuan;
use App\Models\TestUjiKemampuanDetail;
use Illuminate\Http\Request;

class TestUjiKemampuanDetailController extends Controller
{
    public function index()
    {
        $test_uji_kemampuan = TestUjiKemampuan::findOrFail(request('test_uji_kemampuan_id'));
        $items = TestUjiKemampuanDetail::where('test_uji_kemampuan_id', request('test_uji_kemampuan_id'))->orderBy('nama', 'ASC')->get();
        return view('test-uji-kemampuan-detail.index', [
            'title' => 'Detail Test Uji Kemampuan Detail',
            'items' => $items,
            'test_uji_kemampuan' => $test_uji_kemampuan
        ]);
    }

    public function create()
    {
        $test_uji_kemampuan = TestUjiKemampuan::findOrFail(request('test_uji_kemampuan_id'));
        return view('test-uji-kemampuan-detail.create', [
            'title' => 'Tambah Detail Test Uji Kemampuan',
            'test_uji_kemampuan' => $test_uji_kemampuan
        ]);
    }

    public function store()
    {
        request()->validate([
            'nama' => ['required']
        ]);

        TestUjiKemampuanDetail::create([
            'test_uji_kemampuan_id' => request('test_uji_kemampuan_id'),
            'nama' => request('nama')
        ]);

        return redirect()->route('admin.test-uji-kemampuan-detail.index', [
            'test_uji_kemampuan_id' => request('test_uji_kemampuan_id')
        ])->with('success', 'Detail Test Uji Kemampuan berhasil ditambahkan.');
    }


    public function edit($id)
    {
        $item = TestUjiKemampuanDetail::findOrFail($id);
        return view('test-uji-kemampuan-detail.edit', [
            'title' => 'Edit Detail Test Uji Kemampuan',
            'item' => $item
        ]);
    }

    public function update($id)
    {
        request()->validate([
            'nama' => ['required']
        ]);

        $item = TestUjiKemampuanDetail::findOrFail($id);
        $item->update([
            'nama' => request('nama')
        ]);

        return redirect()->route('admin.test-uji-kemampuan-detail.index', [
            'test_uji_kemampuan_id' => $item->test_uji_kemampuan_id
        ])->with('success', 'Detail Test Uji Kemampuan berhasil diupdate.');
    }

    public function destroy($id)
    {
        $item = TestUjiKemampuanDetail::findOrFail($id);
        $test_uji_kemampuan_id = $item->test_uji_kemampuan_id;
        $item->delete();
        return redirect()->route('admin.test-uji-kemampuan-detail.index', [
            'test_uji_kemampuan_id' => $test_uji_kemampuan_id
        ])->with('success', 'Detail Test Uji Kemampuan berhasil dihapus.');
    }
}
