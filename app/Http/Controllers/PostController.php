<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Services\CompanyService;
use App\Models\Post;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, CompanyService $companyService, PostService $postService)
    {
        $request->validate([
            "title" => "required",
            "company" => "required",
            "location" => "required",
            "category" => "required",
            "job-tag" => "required",
//  "files" => null
            "email-url" => "required",
            "deadline" => "required",
            "company_name" => "required",
            "website" => "required",
            "tagline" => "required",
            "tagline2" => "required",
            "file" => "required"
        ]);
        $company = Company::where(['name' => $request->company_name])->first();
        if (!$company) {
            $companyData = $request->only('company_name', 'website', 'file');
            $companyData['tagline'] = $request->tagline . ',' . $request->tagline2;
            $company = $companyService->createCompany($companyData);

        }

        $postData = $request->only('title', 'location', 'category', 'job-tag',  'email-url', 'deadline');
        $postData['company_id'] = $company->id;
        $postData['description'] = 'hello';

        $post = $postService->createPost($postData);

        return view('posts.index');


    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }

    public function layout()
    {
        return view('posts.layout');
    }
}
