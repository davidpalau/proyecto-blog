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
            'name' => 'required',
            'slug' => 'required|unique:tags',
            'summary' => 'required',
        ];

        if ($tag) {
            $rules['slug'] = 'required|unique:tags,slug,' . $tag->id;
        }

        return $rules;
    }
}
