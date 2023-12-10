<?php

namespace App\Http\Requests\Bebida;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\ApiErrorResponse;

class UpdateBebidaRequest extends FormRequest
{
    use ApiErrorResponse;
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
            'nome' => 'required|string|unique:bebidas,nome|min:3',
            'quantidade_estoque' => 'required|integer|min:0',
            'valor' => 'required|numeric|min:0',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Campo obrigatório',
            'string' => 'O conteúdo precisa ser um texto',
            'unique' => ':attribute já existe no banco de dados',
            'min' => 'O conteúdo precisa ser maior que :min',
            'numeric' => 'O conteúdo precisa ser numérico',
            'integer' => 'O conteúdo precisa ser inteiro'
        ];
    }
}
