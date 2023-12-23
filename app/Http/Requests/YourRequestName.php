<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class YourRequestName extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'field1' => 'required|string|max:255',
            'field2' => 'required|email',
            // Add more validation rules as needed
        ];
    }
}
