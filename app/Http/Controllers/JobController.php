<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{

    public function showJobs()
    {
        $jobs = Job::all(); // Fetch all jobs
        return view('home', compact('jobs'));
    }
    public function show($id)
    {
        // Fetch a single job by its ID
        $job = Job::findOrFail($id);

        // Return the view with job details
        return view('job-details', compact('job'));
    }


    public function index()
    {
        // Fetch all jobs from the database
        $jobs = Job::paginate(4); // Using pagination

        // Pass jobs to the view
        return view('dashboard.index', ['jobs' => $jobs]);
    }
    public function landing()
    {
        return view('dashboard.landing');
    }
    public function home()
    {
        return view('welcome');
    }

    public function create()
    {
        return view('dashboard.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'location' => 'required',
            'salary' => 'required|numeric',
            'information' => 'required',
            'contact' => 'required|email',
        ]);

        Job::create($request->all());

        return redirect()->route('index')->with('success', 'Job posted successfully.');
    }

    // Code for Editing Form
    public function edit(Job $job)
    {
        return view('dashboard.edit', compact('job'));
    }

    // Code for Updating Job Data
    public function update(Request $request, Job $job)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'location' => 'required',
            'salary' => 'required|numeric',
            'information' => 'required',
            'contact' => 'required|email',
        ]);

        $job->update($request->all());

        return redirect()->route('index')->with('success', 'Job updated successfully.');
    }

    //Code for Deleting Job
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect()->route('index')->with('success', 'Job deleted successfully.');
    }
}