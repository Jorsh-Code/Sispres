<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentStoreRequest extends FormRequest
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
            'user_id'       => 'required|integer',
            'boleta'        => 'required',
            'telephone'      => 'required',
            'status'  => 'required|in:NoVERIFIED',
            'img1' => 'mimes:jpg,jpeg,png',
            'img2' => 'mimes:jpg,jpeg,png',
        ];
    }
}
