<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AcademiaRequest extends FormRequest
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
            'nome' => 'required|min:10',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'A descrição é obrigatória',
            'nome.min' => 'Utilize pelo menos 10 caracteres para o nome',
        ];
    }
}
