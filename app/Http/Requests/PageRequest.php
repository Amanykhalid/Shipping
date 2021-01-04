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
            'image_short' => 'required|string',
            'image_long' => 'required|string',
            'meta' => 'required|string',
            'des_short' => 'required|string',
            'des_long' => 'required|string',
            'button_title' => 'required|string',
            'des_short' => 'required|string',


            'image' => 'required_without:sliderId',
            'lang'=>'required'
        ];
    }
}
