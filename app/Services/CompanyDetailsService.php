<?php


namespace App\Services;


use App\Models\CompanyDetails;

class CompanyDetailsService
{
    public function createCompanyDetails(array $data)
    {
        $companyDetails = new CompanyDetails();
        $companyDetails = $companyDetails->fill([
            'user_id' => $data['user_id'],
            'name' => $data['name'],
            'website' => $data['website'],
            'file' => $data['file']
        ]);
        $companyDetails->save();

        return $companyDetails;
    }

    public function updateCompanyDetails(array $data, int $detailsId)
    {

        $companyDetails = CompanyDetails::where('id', '=', $detailsId)
            ->update([
                'name' => $data['name'],
                'website' => $data['website'],
                'file' => $data['file']
            ]);

        return $companyDetails;
    }
}
