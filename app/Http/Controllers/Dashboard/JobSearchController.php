<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use App\Models\Job;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobSearchController extends Controller
{
    public function index(Request $request, Category $category)
    {
        $jobsData = $category->jobs();
        if ($request->title) {
            $jobsData->where('title', 'Like', '%' . $request->title . '%');
        }
        if ($request->location) {
            $jobsData->where('location', 'Like', '%' . $request->location . '%');
        }
        $jobs = $jobsData->paginate(Job::PER_PAGE);

        $countData = [];
        foreach ($jobsData->get() as $job) {
            $count = $job->company_details->jobs->where('closing_date', '>=', Carbon::now())->count();

            $countData[$job->company_id] = $count;
        }

        return view('jobSearches.index', compact('jobs', 'countData'))
            ->with('i', (request()->input('page', 1) - 1) * Job::PER_PAGE);

    }
}
