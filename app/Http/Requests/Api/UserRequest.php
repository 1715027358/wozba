<?php

namespace App\Http\Requests\Api;

use Dingo\Api\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'phonenum' => 'required|unique:users,phonenum',
            'password' => 'required|min:6',
        ];
    }
    public function messages()
    {
        return [
            'phonenum.required' => '手机号不能为空',
            'phonenum.unique' => '手机号已注册',
            'password.required' => '密码不能为空',
            'password.min' => '密码长度不能小于6位'
        ];
    }



}