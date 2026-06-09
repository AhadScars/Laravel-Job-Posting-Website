<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Joblist;

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

    public function show($id)
    {
        $job = Joblist::findOrFail($id);
        return view('job_details', compact('job'));
    }
}
