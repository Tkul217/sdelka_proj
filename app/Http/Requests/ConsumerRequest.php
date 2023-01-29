<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsumerRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required',
            'phone' => 'required|min:11|max:11',
            'role' => 'required',
            'work_experience' => 'required',
            'avatar' => 'nullable|image'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
