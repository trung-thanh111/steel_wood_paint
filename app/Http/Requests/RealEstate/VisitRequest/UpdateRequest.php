<?php

namespace App\Http\Requests\RealEstate\VisitRequest;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'property_id' => 'nullable|exists:properties,id',
            'full_name' => 'required|max:150',
            'email' => 'nullable|email',
            'phone' => 'required',
            'service_type' => 'nullable|string|max:100',
            'preferred_date' => 'nullable|date',
            'preferred_time' => 'nullable',
        ];
    }

    public function messages(): array
    {
        return [
            'property_id.exists' => 'Bất động sản không hợp lệ.',
            'full_name.required' => 'Bạn chưa nhập họ tên khách hàng.',
            'email.email' => 'Email không đúng định dạng.',
            'phone.required' => 'Bạn chưa nhập số điện thoại khách hàng.',
        ];
    }
}
