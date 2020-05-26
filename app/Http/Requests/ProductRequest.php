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
    
    public function rules()
    {
        return [
            'name' => 'required|min:10|max:100',
            'price' => 'required',
            'desc' => 'required|url'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => trans('product.name_required'),
            'name.min' => trans('product.name.min'),
            'name.max' => 'ten khong qua 100 ki tu',

            'price.required' => trans('product.name_required'),
            'desc.required' => trans('product.price'),
            'desc.url' => trans('product.url'),
        ];
    }
}