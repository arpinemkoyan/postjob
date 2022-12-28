<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyDetails extends Model
{
    use HasFactory;

    public $table = "company_details";
    protected $fillable = ['user_id', 'name', 'tagline', 'website', 'file'];
}
