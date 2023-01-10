<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    const PER_PAGE = 5;

    public $table = "jobs";
    protected $fillable = [
        'title',
        'company_id',
        'location',
        'category_id',
        'description',
        'email_url',
        'closing_date'
    ];

    public function company_details()
    {
        return $this->belongsTo(CompanyDetails::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'job_tags');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
