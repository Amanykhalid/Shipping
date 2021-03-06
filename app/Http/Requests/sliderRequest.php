<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class sliderRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'required_without:sliderId|mimes:jpg,jpeg,png',
            'lang'=>'required'
        ];

    }
    
    public function messages()
    {
        return [
            'required' => 'هذا الحقل مطلوب',
            'string' => '= هذا الحقل  لابد ان يكون احرف',
            'mimes'  =>'هذا الحقل لابد ان يكون صورة ',
        ];
    }
}
