<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $tag = $this->route()->parameter('tag');

        $rules = [
            'name' => 'required|max:50',
            'slug' => 'required|unique:tags',
            'summary' => 'required|max:255', // Limita el campo summary a 255 caracteres
        ];

        if ($tag) {
            $rules['slug'] = 'required|unique:tags,slug,' . $tag->id;
        }

        return $rules;
    }
}
