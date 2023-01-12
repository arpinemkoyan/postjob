<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Requests\CompanyDetailsRequest;
use App\Models\CompanyDetails;
use App\Models\CompanyDetailsTaglines;
use App\Services\CompanyDetailsService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CompanyDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companyDetails = auth()->user()->companyDetail;
        if ($companyDetails) {
            return view('companyDetails.index', compact('companyDetails'));
        }
        return view('companyDetails.create', compact('companyDetails'));

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

        $detailsData = $request->only('name', 'website', 'file', 'logo');
        $detailsData['user_id'] = auth()->user()->id;

        $newCompanyDetails = $companyDetailsService->createCompanyDetails($detailsData);

        $tagline = new CompanyDetailsTaglines;
        $tagline = $tagline->insert([
                [
                    'tagline' => $request->tagline1,
                    'company_details_id' => $newCompanyDetails->id
                ],
                [
                    'tagline' => $request->tagline2,
                    'company_details_id' => $newCompanyDetails->id
                ]]
        );

        //Move Uploaded File to public folder

        $destinationPath = 'storage/uploads/company';
        $myimage = $request->logo->getClientOriginalName();
        $request->logo->move(public_path($destinationPath), $myimage);


        $companyDetails = auth()->user()->companyDetail;

        return view('companyDetails.index', compact('companyDetails'));

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

        $i = 1;
        $companyDetails = CompanyDetails::find($id);

        return view('companyDetails.edit', compact('companyDetails', 'i'));

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

        $detailsData = $request->only('name', 'website');

        $filePath = $request->file('file')->store('uploads/file');
        $logoPath = $request->file('logo')->store('uploads/logo');

        $detailsData['file'] =$filePath;
        $detailsData['logo'] =$logoPath;

        $companyDetailsService->updateCompanyDetails($detailsData, $detailsId);
        $taglines = CompanyDetailsTaglines::where(["company_details_id" => $detailsId])->get();
        if( count($taglines) ==2){
                    $taglines[2]->update(['tagline' => $request->tagline2]);
        }
        $taglines[0]->update(['tagline' => $request->tagline1]);

        return redirect()->route('companyDetails.index')
            ->with('success', 'Company Details updated successfully');
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

    public function download($path)
    {
        return Storage::download($path);
    }
}
