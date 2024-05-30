<?php

namespace App\Http\Controllers;

use App\Models\JobLocation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class JobLocationController extends Controller
{
    public function index(Request $request)
        {
            $sub_district = $request->get('sub_district');
            $jobLocations = JobLocation::where('sub_district', 'like', "%{$sub_district}%")->get();

            $contacts = null;
            if (!empty($sub_district)) {
                // Hanya melakukan pencarian di tabel contacts jika kolom pencarian tidak kosong
                $contacts = DB::table('contacts')->where('region', 'like', "%{$sub_district}%")->get();
            }

            return view('jobLocations.index', compact('jobLocations', 'contacts'));
        }



    public function create()
    {
        return view('jobLocations.create');
    }

    public function store(Request $request)
    {
        JobLocation::create($request->all());
        return redirect()->route('jobLocations.index');
    }

    public function edit(JobLocation $jobLocation)
    {
        return view('jobLocations.edit', compact('jobLocation'));
    }

    public function update(Request $request, JobLocation $jobLocation)
    {
        $jobLocation->update($request->all());
        return redirect()->route('jobLocations.index');
    }

    public function destroy(JobLocation $jobLocation)
    {
        $jobLocation->delete();
        return redirect()->route('jobLocations.index');
    }
}
