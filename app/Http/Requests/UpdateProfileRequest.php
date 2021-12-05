<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'fullname' => 'required|string|max:255',
            'description' => 'nullable|string',
        ];
    }

    public function attributes()
    {
        return [
            'avatar' => 'アバター',
            'fullname' => 'お名前',
            'description' => '自己紹介',
        ];
    }

}
