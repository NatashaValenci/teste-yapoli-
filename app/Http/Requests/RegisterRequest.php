<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'description' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Campo nome obrigatorio',
            'name.string' => 'Campo nome invalido',
            'description.required' => 'Campo descricao obrigatorio',
            'description.string' => 'Campo descricao invalido'
        ];
    }
}
