<?php

namespace App\Http\Requests\Alimento;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\ApiErrorResponse;

class UpdateAlimentoRequest extends FormRequest
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
            'nome' => 'required|string|unique:alimentos|min:3',
            'quantidade_estoque' => 'required|integer|min:0',
            'valor' => 'required|numeric|min:0',
            'composicao' => 'required|string|unique:alimentos',
        ];
    }
    public function messages()
    {
        return [
            'required' => 'Campo obrigatório',
            'string' => 'O conteúdo precisa ser um texto',
            'unique' => ':attribute já existe no banco de dados',
            'min' => 'O conteúdo precisa ser maior que :min',
            'max' => 'O conteúdo precisa ser menor que :max',
            'numeric' => 'O conteúdo precisa ser numérico',
            'integer' => 'O conteúdo precisa ser inteiro'
        ];
    }
}
