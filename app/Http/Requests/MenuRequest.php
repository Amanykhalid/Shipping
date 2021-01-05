<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
            'lang' => 'required|string',
            'name' => 'required|string',
            'parent' => 'required|string',
            'link' => 'required|string',
            'type'=>'required',
            'order'=>'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'هذا الحقل مطلوب',
            'string' => '= هذا الحقل  لابد ان يكون احرف',
            'integer'  =>'هذا الحقل لابد ان يكون ارقام ',
        ];
    }
}
