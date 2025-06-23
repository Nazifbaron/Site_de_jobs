<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::latest()->with(['employer','tags'])->get()->groupBy('feactured');
        return view('jobs.index',[
            'jobs'=> $jobs[0],
            'feacturedJob'=> $jobs[1],
            'tags'=> Tag::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes=$request->validate([
            'title'=>['required'],
            'salary'=>['required'],
            'location'=>['required'],
            'contrat'=>['required',Rule::in(['Full Time','Part Time'])],
            'url'=>['required'],
            'tags'=>['nullable'],
        ]);

        $attributes['feactured'] = $request->has('feactured');

        $job =Auth::user()->employer->jobs()->create(Arr::except($attributes, 'tags'));

        if ($attributes['tags'] ?? false) {
            
            foreach (explode(',',$attributes['tags']) as $tag) {
                $job->tag($tag);
            }
        }

        return redirect('/');

    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
