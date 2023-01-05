<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyDetailsTaglines extends Model
{
    use HasFactory;

    public $table = "company_details_taglines";
    protected $fillable = ['tagline', 'company_details_id'];

    public function companyDetails()
    {
        return $this->belongsTo(CompanyDetails::class);
    }
}
