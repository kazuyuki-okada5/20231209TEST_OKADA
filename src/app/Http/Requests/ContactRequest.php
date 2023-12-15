<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
     public function messages()
     {
         return [
             'first_name.required' => '姓を入力してください',
             'last_name.required' => '名を入力してください',
             'gender.string' => '性別を選択してください',
             'email.required' => 'メールアドレスを入力してください',
             'tel.required' => '電話番号を入力してください',
             'address.required' => '住所を入力してください',
             'contact.required' => '住所を入力してください',
             'contact.required' => 'お問い合わせ内容を入力してください',
             
         ];
     }
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'tel' => ['required', 'numeric', 'digits_between:10,11'],
            'address' => ['required', 'string', 'max:255'],
            'select' => ['required', 'string', 'max:255'],
        ];
    }
}
