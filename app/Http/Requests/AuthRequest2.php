<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest2 extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'username'=>"required",
                'email'=>['required','email'],
                'password'=>[
                    'required',
                    'min:6',
                ],
                'password_confirmation'=>['required','min:6','same:password'],
                'phone'=>['required']
        ];
    }

    public function messages(): array{
        return [
            'username.required' => 'Bạn chưa nhập tên',
            'email.required'=> 'Bạn chưa nhập email.',
            'email.email'=> 'Email chưa đúng định đạng.',
            'password.required'=> 'Bạn chưa nhập mật khẩu.',
            'password.min'=> 'Mật khẩu tối thiểu 6 ký tự.',
            'password_confirmation.required'=>'Bạn chưa nhập mật khẩu',
            'password_confirmation.same'=>'Mật khẩu không giống nhau',
            'phone.required'=>'Bạn chưa nhập số điện thoại',
            
        ] ;
    }
}
