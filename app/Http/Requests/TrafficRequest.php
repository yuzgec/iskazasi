<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrafficRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'                 => 'required|min:5|max:99',
            'phone'              => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'            => 'İsim Soyisim zorunludur.',
            'name.max'                 => 'İsim Soyisim en fazla 99 karakter olabilir',
            'name.min'                 => 'İsim Soyisim en az 5 karakter olabilir',
            'phone.required'           => 'Telefon zorunludur.'
        ];
    }
}
