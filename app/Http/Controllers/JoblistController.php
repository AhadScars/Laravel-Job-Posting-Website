<?php

namespace App\Http\Controllers;

use App\Models\AppliedJobs;
use App\Models\Joblist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JoblistController extends Controller
{
    protected function authorizeAdmin()
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            return redirect('/')->with('error', 'Only admins can post jobs.');
        }

        return null;
    }

    public function index(Request $request)
    {
        $search = $request->search;

        $jobs = Joblist::when($search, function ($query, $search) {
            $query->where('title', 'like', "%{$search}%")
                ->orWhere('description', 'like', "%{$search}%")
                ->orWhere('company', 'like', "%{$search}%")
                ->orWhere('location', 'like', "%{$search}%")
                ->orWhere('salary', 'like', "%{$search}%");
        })
            ->latest()
            ->paginate(6);


        return view('jobs', compact('jobs', 'search'));
    }

    public function job()
    {
        if ($response = $this->authorizeAdmin()) {
            return $response;
        }

        return view('/post_job');
    }

    public function store(Request $request)
    {
        if ($response = $this->authorizeAdmin()) {
            return $response;
        }

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'company' => 'required',
            'location' => 'required',
            'salary' => 'required|numeric',
        ]);

        Joblist::create($request->all());

        return redirect()->route('jobs')->with('success', 'Job posted successfully!');
    }

    public function edit($id)
    {
        if ($response = $this->authorizeAdmin()) {
            return $response;
        }

        $job = Joblist::findOrFail($id);
        return view('editjobdetails', compact('job'));
    }

    public function update(Request $request, $id)
    {
        if ($response = $this->authorizeAdmin()) {
            return $response;
        }

        $job = Joblist::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'company' => 'required',
            'location' => 'required',
            'salary' => 'required|numeric',
        ]);

        $job->update($request->all());

        return redirect()->route('jobs.show', $id)->with('success', 'Job updated successfully!');
    }

    public function destroy($id)
    {
        if ($response = $this->authorizeAdmin()) {
            return $response;
        }

        $job = Joblist::findOrFail($id);
        $job->delete();

        return redirect()->route('jobs')->with('success', 'Job deleted successfully!');
    }

    public function show($id)
    {
        $job = Joblist::findOrFail($id);
        return view('job_details', compact('job'));
    }

    public function apply($jobId)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Please login to apply.');
        }

        $userId = Auth::id();

        $alreadyApplied = AppliedJobs::where('user_id', $userId)
            ->where('job_id', $jobId)
            ->exists();

        if ($alreadyApplied) {
            return redirect()->back()->with('error', 'You have already applied for this job.');
        }

        AppliedJobs::create([
            'user_id' => $userId,
            'job_id' => $jobId
        ]);

        return redirect()->back()->with('success', 'Applied successfully!');
    }
}
