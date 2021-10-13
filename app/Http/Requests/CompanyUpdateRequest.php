<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CompanyUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $company = $this->route('company');
        return Auth::user()->company_id === $company->id;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:50',
            'specialization' => 'required|min:3|max:50',
            'company_code' => 'required|numeric',
            'country' => 'required|string|max:30',
            'city' => 'required|string|max:30',
            'post_code' => 'required|numeric',
        ];
    }
}
