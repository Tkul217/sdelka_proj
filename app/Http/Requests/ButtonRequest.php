<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ButtonRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'button_name' => 'required',
            'slider_id' => 'required',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
