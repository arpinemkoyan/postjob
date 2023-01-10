<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\JobRequest;
use App\Models\Category;
use App\Models\Job;
use App\Models\Tag;
use App\Services\JobService;
use App\Services\JobTagService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jobs.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('jobs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobRequest $request, JobService $jobService, JobTagService $jobTagService)
    {
        $jobData = $request->only('title', 'location', 'email_url', 'deadline', 'category_id', 'description');
        $jobData['company_details_id'] = auth()->user()->id;

        $job = $jobService->createJob($jobData);
        $job_id = $job->id;
        $tags = explode(',', $request->job_tag);
        foreach ($tags as $tagName) {
            $tag = Tag::firstOrCreate([
                'tag' => $tagName
            ]);

            $jobTagService->createJobTag($job_id, $tag->id);
        }

        return view('jobs.index');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Job $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        $address = str_replace(', ', '%20', $job->location . ',');
        $shareButtons = \Share::page(
            url()->current()
        )
            ->facebook()
            ->twitter()
            ->linkedin()
            ->telegram()
            ->whatsapp()
            ->reddit();

        return view('jobs.show', compact('address', 'shareButtons', 'job'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Job $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Job $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Job $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()->route('jobs.index')
            ->with('success', 'Job deleted successfully');
    }

    public function layout()
    {
        return view('jobs.layout');
    }
}
