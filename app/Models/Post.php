<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public $table = "posts";
    protected $fillable = [
        'title',
        'company_id',
        'location',
        'category',
        'job-tag',
        'description',
        'email-url',
        'closing-date'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
