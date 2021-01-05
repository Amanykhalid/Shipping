<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
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
            'name' => 'required|string',
            'des' => 'required|string',
            'image' => 'required_without:offerId|mimes:jpg,jpeg,png',
            'lang'=>'required',
            'type'=>'required'
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
