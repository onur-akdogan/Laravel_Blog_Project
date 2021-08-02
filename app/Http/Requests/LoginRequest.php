<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'=>'required|min:3|max:255',
            'password'=>'required|min:3|max:20',
        ];
    }


    public function messages(){
        return [
            'email.required'=>'Lütfen Bir Email Adresi Giriniz',
            'email.min'=>'E mail Adresiniz en az 3 karekterden oluşmalıdır',
            'email.max'=>'E mail Adresiniz en fazla 20 karekterden oluşmalıdır',
            'password.required'=>'Lütfen Bir password  Giriniz',
            'password.min'=>'password en az 3 karekterden oluşmalıdır',
            'epassword.mail.max'=>'password en fazla 20 karekterden oluşmalıdır',
        ];
    }
}
