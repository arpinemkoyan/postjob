<?php


namespace App\Services;


use App\Models\Post;

class PostService
{
    public function createPost($data)
    {

        $post = new Post();
        $post = $post->fill([
            'title' => $data['title'],
            'company_id' => $data['company_id'],
            'location'=> $data['location'],
            'category' =>$data['category'],
            'job-tag' =>$data['job-tag'],
            'description' =>$data['description'],
            'email-url' =>$data['email-url'],
            'closing-date' =>$data['deadline']
        ]);
        $post->save();

        return $post;
    }

}
