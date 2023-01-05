<?php


namespace App\Services;


use App\Models\JobTag;

class JobTagService
{
    public function createJobTag(int $job_id, int $tag_id)
    {

        $jobTag = new JobTag();
        $jobTag->job_id = $job_id;
        $jobTag->tag_id = $tag_id;
        $jobTag->save();
        return $jobTag;

    }
}
