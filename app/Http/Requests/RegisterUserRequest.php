<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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
            'fullname' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|min:6',
            're_password' => 'required|same:password'
        ];
    }

    public function attributes()
    {
        return [
            'fullname' => 'お名前',
            'email' => 'メールアドレス',
            'password' => 'パスワード',
            're_password' => '確認用パスワード'
        ];
    }
}
