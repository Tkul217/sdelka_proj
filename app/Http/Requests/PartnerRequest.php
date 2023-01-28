<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartnerRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'role' => 'required|string',
            'logo' => 'required|image',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
