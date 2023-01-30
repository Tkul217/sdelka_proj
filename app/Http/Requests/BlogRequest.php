<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
