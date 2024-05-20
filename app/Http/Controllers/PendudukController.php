<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;


class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $keyword = $request->keyword;
        $perPage = $request->query('perPage', 5); // Default to 5 if not specified

        $kontaks = Penduduk::where('namalengkap', 'LIKE','%'.$keyword.'%')
        ->orWhere('TTL', 'LIKE','%'.$keyword.'%')
        ->orWhere('gender', 'LIKE', '%'.$keyword.'%')
        ->orWhere('agama', 'LIKE', '%'.$keyword.'%')
        ->orWhere('alamat', 'LIKE', '%'.$keyword.'%')
        ->orWhere('phonenumber', 'LIKE', '%'.$keyword.'%')
        ->orWhere('email', 'LIKE', '%'.$keyword.'%')
        ->orWhere('No_ktp', 'LIKE', '%'.$keyword.'%')


        ->orWhere('pendidikan', 'LIKE','%'.$keyword.'%')
        ->orWhere('institusi', 'LIKE', '%'.$keyword.'%')
        ->orWhere('jurusan', 'LIKE', '%'.$keyword.'%')
        ->orWhere('tahunmasuk', 'LIKE', '%'.$keyword.'%')
        ->orWhere('tahunlulus', 'LIKE', '%'.$keyword.'%')

        ->orWhere('pengalaman', 'LIKE','%'.$keyword.'%')
        ->orWhere('bidang', 'LIKE', '%'.$keyword.'%')
        ->orWhere('tahun', 'LIKE', '%'.$keyword.'%')
        ->orWhere('posisi', 'LIKE', '%'.$keyword.'%')

        ->paginate(5);

        return view('databasependuduk', ['kontaks' => $kontaks, 'keyword' => $keyword, 'perPage' => $perPage,]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulirpenduduk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'namalengkap' => 'required',
            'TTL' => 'required',
            'gender' => ['required', Rule::in(['Pria', 'Wanita'])],
            'agama' => ['required', Rule::in(['Islam', 'Kristen', 'Katolik','Hindu','Buddha', 'Khonghucu'])],
            'alamat' => 'required',
            'phonenumber' => 'required|numeric|regex:/^\d{10,13}$/',
            'email' => 'nullable|email',
            'No_ktp'=> 'required|numeric|digits:16',

            'pendidikan' => ['required', Rule::in(['Tidak ada', 'SD atau setara', 'SMP atau setara', 'SMA atau setara', 'D3 atau setara','Pendidikan tinggi atau setara'])],
            'institusi' => 'nullable|string',
            'jurusan' => 'nullable|string',
            'tahunmasuk' => 'nullable|numeric',
            'tahunlulus' => 'nullable|numeric',

            'pengalaman' => 'nullable|string',
            'bidang' => 'nullable|string',
            'tahun' => 'nullable|numeric',
            'posisi' => 'nullable',
        ]);

        // Simpan data ke dalam database
        Penduduk::create([
            'namalengkap' => $request->input('namalengkap'),
            'TTL' => $request->input('TTL'),
            'gender' => $request->input('gender'),
            'agama' => $request->input('agama'),
            'alamat' => $request->input('alamat'),
            'phonenumber' => $request->input('phonenumber'),
            'email' => $request->input('email'),
            'No_ktp' =>$request->input('No_ktp'),

            'pendidikan' => $request->input('pendidikan'),
            'institusi' => $request->input('institusi'),
            'jurusan' => $request->input('jurusan'),
            'tahunmasuk' => $request->input('tahunmasuk'),
            'tahunlulus' => $request->input('tahunlulus'),

            'pengalaman' => $request->input('pengalaman'),
            'bidang' => $request->input('bidang'),
            'tahun' => $request->input('tahun'),
            'posisi' => $request->input('posisi'),

        ]);

            // Redirect to the admin settings page or wherever you want
        return redirect()->route('databasependuduk')
            ->with('success', 'Data added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kontak = Penduduk::find($id);

        return view('editformulirpenduduk', compact('kontak'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'namalengkap' => 'required',
            'TTL' => 'required',
            'gender' => ['required', Rule::in(['Pria', 'Wanita'])],
            'agama' => ['required', Rule::in(['Islam', 'Kristen', 'Katolik','Hindu','Buddha', 'Khonghucu'])],
            'alamat' => 'required',
            'phonenumber' => 'required|numeric|regex:/^\d{10,13}$/',
            'email' => 'nullable|email',
            'No_ktp'=> 'required|numeric|digits:16',

            'pendidikan' => ['required', Rule::in(['Tidak ada', 'SD atau setara', 'SMP atau setara', 'SMA atau setara', 'D3 atau setara','Pendidikan tinggi atau setara'])],
            'institusi' => 'nullable|string',
            'jurusan' => 'nullable|string',
            'tahunmasuk' => 'nullable|numeric',
            'tahunlulus' => 'nullable|numeric',

            'pengalaman' => 'nullable|string',
            'bidang' => 'nullable|string',
            'tahun' => 'nullable|numeric',
            'posisi' => 'nullable',
        ]);

        Penduduk::find($id)->update([
            'namalengkap' => $request->input('namalengkap'),
            'TTL' => $request->input('TTL'),
            'gender' => $request->input('gender'),
            'agama' => $request->input('agama'),
            'alamat' => $request->input('alamat'),
            'phonenumber' => $request->input('phonenumber'),
            'email' => $request->input('email'),
            'No_ktp' =>$request->input('No_ktp'),

            'pendidikan' => $request->input('pendidikan'),
            'institusi' => $request->input('institusi'),
            'jurusan' => $request->input('jurusan'),
            'tahunmasuk' => $request->input('tahunmasuk'),
            'tahunlulus' => $request->input('tahunlulus'),

            'pengalaman' => $request->input('pengalaman'),
            'bidang' => $request->input('bidang'),
            'tahun' => $request->input('tahun'),
            'posisi' => $request->input('posisi'),

        ]);

        return redirect()->route('databasependuduk')
            ->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Penduduk::destroy($id);

        return redirect()->route('databasependuduk')
            ->with('success', 'Data berhasil dihapus');
    }
}
