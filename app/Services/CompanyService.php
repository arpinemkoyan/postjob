<?php


namespace App\Services;

use App\Models\Company;

class CompanyService
{
    public function createCompany($data)
    {
        $company = new Company();
        $company = $company->fill([
            'name' => $data['company_name'],
            'website' => $data['website'],
            'file'=> $data['file'],
            'tagline' =>$data['tagline']
        ]);
        $company->save();

        return $company;
    }

}
