<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyDetails extends Model
{
    use HasFactory;

    public $table = "company_details";
    protected $fillable = ['user_id', 'name', 'website', 'file', 'tagline1', 'tagline2', 'logo'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }


    public function tagline()
    {
        return $this->hasMany(CompanyDetailsTaglines::class);
    }
}
