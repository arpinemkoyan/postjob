<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public $table = "tags";
    protected $fillable = ['tag'];

    public function jobs()
    {
        return $this->belongsToMany(Job::class, 'job_tags');
    }
}
