<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $category = $this->route()->parameter('category');

        $rules = [
            'name' => 'required|max:50',
            'slug' => 'required|unique:categories',
            'summary' => 'required|max:255', // Limita el campo summary a 255 caracteres
        ];

        if ($category) {
            $rules['slug'] = 'required|unique:categories,slug,' . $category->id;
        }

        return $rules;
    }
}
