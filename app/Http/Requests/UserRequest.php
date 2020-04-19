<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $data = $this->all();
        $rules = [
            'name' => 'required', // ユーザー名
            'email' => 'required|email', // メールアドレス
            'user_type' => 'required', // 機能権限
        ];

        // IDが存在しない（新規登録）とき
        if( !isset( $data['id'] ) ){
            $rules['email'] = 'required|email|unique:users'; // パスワード
            $rules['password'] = 'required'; // パスワード
        }
        
        return $rules; 
    }

    public function messages() {
        return [
            "name.required" => "ユーザー名は必須項目です。",
            "email.required" => "メールアドレスは必須項目です。",
            "email.email" => "メールアドレスの形式で入力してください。",
            "email.unique" => "メールアドレスは既に登録済みです",
            "user_type.required" => "機能権限は必須項目です。",
            "password.required" => "パスワードは必須項目です。",
        ];
    }
}
