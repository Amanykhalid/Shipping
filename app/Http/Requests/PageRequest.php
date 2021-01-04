<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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
            'name' => 'required|string',
            'image_short' => 'required_without:pageId|mimes:jpg,jpeg,png',
            'image_long' => 'required_without:pageId|mimes:jpg,jpeg,png',
            'meta' => 'required|string',
            'des_short' => 'required|string',
            'des_long' => 'required|string',
            'button_title' => 'required|string',
            'button_link' => 'required|string',
            'type'=>'required',
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
