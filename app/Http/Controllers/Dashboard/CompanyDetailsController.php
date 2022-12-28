<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\CompanyDetailsRequest;
use App\Models\CompanyDetails;
use App\Services\CompanyDetailsService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use function Illuminate\Session\userId;

class CompanyDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = auth()->user()->id;
        $companyDetails = CompanyDetails::where(['user_id' => $userId])->first();
        return view('companyDetails.index', compact('companyDetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companyDetails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyDetailsRequest $request, CompanyDetailsService $companyDetailsService)
    {

        $tagline = $request->tagline1 . '\n' . $request->tagline2;
        $detailsData = $request->only('name', 'website', 'file');
        $detailsData['tagline'] = $tagline;
        $detailsData['user_id'] = auth()->user()->id;

        $companyDetailsService->createCompanyDetails($detailsData);

        return route('companyDetails.index');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\CompanyDetails $companyDetails
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyDetails $companyDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\CompanyDetails $companyDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyDetails $companyDetails, int $id)
    {
        $companyDetails = CompanyDetails::find($id)->first();

        return view('companyDetails.edit', compact('companyDetails'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CompanyDetails $companyDetails
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyDetailsRequest $request, CompanyDetails $companyDetails, int $detailsId, CompanyDetailsService $companyDetailsService)
    {

        $detailsData = $request->only('name', 'website', 'tagline', 'file');
        $detailsData['user_id'] = auth()->user()->id;
        $companyDetailsService->updateCompanyDetails($detailsData, $detailsId);

        return redirect()->route('companyDetails.index')
            ->with('success', 'Book updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\CompanyDetails $companyDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyDetails $companyDetails)
    {
        //
    }
}
