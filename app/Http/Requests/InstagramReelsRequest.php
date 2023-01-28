<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstagramReelsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'instagram_reels' => 'required',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
