<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'nome' => 'required',
            'email' => 'required',
            'senha' => 'required',
            'academia_id' => 'required|exists:academia,id'
            //
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O nome é obrigatório',
            'email.required' => 'A email é obrigatória',
            'senha.required' => 'A senha é obrigatório',
            'academia_id.required' => 'A academia é obrigatória',
            'academia_id.exists' => 'Academia inexistente'
        ];
    }
}
