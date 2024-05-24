<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function edit()
    {
        $job = Job::find(1); // Pastikan ID yang sesuai
        return view('job.edit', compact('job'));
    }

    public function update(Request $request)
    {
        $job = Job::find(1); // Pastikan ID yang sesuai
        $job->description = $request->input('content');
        $job->save();

        return response()->json(['description' => $job->description]);
    }
}