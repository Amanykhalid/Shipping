<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LangRequest extends FormRequest
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
            //
            'name' => 'required|string',
            'code' => 'required|string',
            'dir' => 'required',
            'flag'=>'required_without|LangId'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'هذا الحقل مطلوب',
            'name.string' => 'اسم اللغة لابد ان يكون احرف',
            'code.string' => 'كود اللغة لابد ان يكون احرف',
        ];
    }
}
