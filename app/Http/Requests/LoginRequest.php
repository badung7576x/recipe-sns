<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|min:6',
        ];
    }

    public function attributes()
    {
        return [
            'email' => 'メールアドレス',
            'password' => 'パスワード',
        ];
    }

    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($validator->errors()->any()) {
                $validator->errors()->add('common', 'メールアドレスまたはパスワードが正しくないです。');
            }
        });
    }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @return Provider|bool
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function authenticate()
    {
        $credentials = $this->only('email', 'password');
        if(!Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'common' => 'ログインが失敗しました。',
            ]);
        }
    }
}
