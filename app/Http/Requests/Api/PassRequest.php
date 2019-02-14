<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class PassRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'phonenum' => 'required',
            'password' => 'required|min:6',
        ];
    }
    public function messages()
    {
        return [
            'phonenum.required' => '手机号不能为空',
            'password.required' => '密码不能为空',
            'password.min' => '密码长度不能小于6位'
        ];
    }

}
