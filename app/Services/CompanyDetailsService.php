<?php


namespace App\Services;


use App\Models\CompanyDetails;

class CompanyDetailsService
{
    public function createCompanyDetails($data)
    {
        $companyDetails = new CompanyDetails();
        $companyDetails = $companyDetails->fill([
            'user_id' => $data['user_id'],
            'name' => $data['name'],
            'website' => $data['website'],
            'tagline' => $data['tagline'],
            'file' => $data['file']
        ]);
        $companyDetails->save();

        return $companyDetails;
    }

    public function updateCompanyDetails($data, $detailsId)
    {

        $companyDetails = CompanyDetails::where('id', '=', $detailsId)
            ->update([
                'user_id' => $data['user_id'],
                'name' => $data['name'],
                'website' => $data['website'],
                'tagline' => $data['tagline'],
                'file' => $data['file']
            ]);

        return $companyDetails;
    }
}
