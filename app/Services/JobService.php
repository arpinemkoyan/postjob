<?php


namespace App\Services;


use App\Models\Job;

class JobService
{
    public function createJob(array $data)
    {
        $job = new Job();
        $job = $job->fill([
            'title' => $data['title'],
            'location' => $data['location'],
            'category_id' => $data['category_id'],
            'description' => $data['description'],
            'email_url' => $data['email_url'],
            'closing_date' => $data['deadline'],
            'company_details_id' => $data['company_details_id']
        ]);
        $job->save();

        return $job;
    }

}
