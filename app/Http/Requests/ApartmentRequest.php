<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApartmentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required',
            'salary' => 'required|numeric',
            'link' => 'required',
            'type' => 'required',
            'image' => 'nullable|image',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
