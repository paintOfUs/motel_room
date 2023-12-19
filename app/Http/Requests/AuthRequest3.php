<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest3 extends FormRequest
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
                'title'=>"required",
                'description'=>'required',
                'street'=>'required',
                'district'=>'required',
                'city'=>'required',
                'area'=>'required',
                'cost'=>'required',
                'categories'=>'required',
                'contact_person'=>'required',
                'phone'=>'required',
                'img'=> 'required'
        ];
    }

    public function messages(): array{
        return [
            'title.required' => 'Bạn cần ghi thông tin nhà thuê.',
            'description.required'=> 'Bạn cần miêu tả về nhà cho thuê.',
            'street.required'=> 'Bạn chưa nhập tên đường nhà cho thuê.',
            'district.required'=> 'Bạn chưa nhập quận/huyện nhà cho thuê.',
            'city.required'=> 'Bạn chưa nhập thành phố nhà cho thuê.',
            'area.required'=> 'Bạn chưa nhập diện tích nhà cho thuê.',
            'cost.required'=> 'Bạn chưa nhập giá tiền nhà cho thuê',
            'categories.required'=> 'Bạn chưa loại nhà cho thuê.',
            'contact_person.required'=> 'Bạn chưa ghi tên người đăng tin.',
            'phone.required'=> 'Bạn chưa nhập số điện thoại.',
            'img.required'=> 'Bạn cần có hình ảnh minh họa nhà cho thuê',
        ] ;
    }
}
