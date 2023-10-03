<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|min:5',
            'price' => 'required|numeric|min:1000|max:99999999'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Nama produk harus diisi',
            'name.min' => 'Nama produk minimal 5 karakter',
            'price.required' => 'Harga produk harus diisi',
            'price.numeric' => 'Harga produk harus berupa angka',
            'price.min' => 'Harga produk minimal 1000 rupiah',
            'price.max' => 'Harga produk maksimal 99999999 rupiah'
        ];
    }
}
