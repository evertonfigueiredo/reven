<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DiarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'data' => 'nullable|date',
            'abertura' => 'nullable|numeric',
            'max' => 'nullable|numeric',
            'min' => 'nullable|numeric',
            'fechamento' => 'nullable|numeric',
        ];
    }
}
