<?php

namespace App\Http\Requests;

use App\Models\CompanyDetailsTaglines;
use Illuminate\Foundation\Http\FormRequest;

class CompanyDetailsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'website' => 'required',
            'file' => 'required',
            'tagline1' => 'required',
            'logo' => 'required'
        ];
    }

    public function taglines()
    {
        return $this->hasMany(CompanyDetailsTaglines::class);
    }
}
