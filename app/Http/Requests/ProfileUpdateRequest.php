<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
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
           "name"=>"requerd"|"min:3"|"max:255",
           "email"=>"requerd"|"min:3"|"max:255"|"email"|"unique:users",
           "password"=>"min:8"|"max:255",
        ];
    }
    public function messages()
    {
        return [
            "name.requerd"=>"Kullanıcı Adı Giriniz",
            "email.requerd"=>"Email Adresi Giriniz",
            "password.requerd"=>"Parolanızı Giriniz",
            "name.min"=>"kullanıcı adı en az 3 karekter giriniz",
            "email.min"=>"Mail adresinize en az 3 karekter giriniz",
            "password.min"=>"Parolanızı en az 3 karekter giriniz",
            "name.max"=>"kullanıcı adı en fazla 255 karekter giriniz",
            "email.max"=>"Mail adresinize en fazla 255 karekter giriniz",
            "password.max"=>"Parolanızı en fazla 255 karekter giriniz",
            "email.unique"=>"Bu mail adresi zaten alınmıştır",
            "email.email"=>"Lütfen geçerli bir mail adresi giriniz",
        ];
    }
}
