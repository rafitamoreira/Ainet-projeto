<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderCriarPostRequest extends FormRequest
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
            'numero' =>         'required',
            'preco' =>        'required',
            'notas' =>       'nullable',
        ];
    }
    public function messages()
    {
        return [
            'numero.required' => 'Campo "Numero de Cliente" tem que ser preenchido',
            'preco.required' => 'Campo "Valor da Encomenda" tem que ser preenchido',
        ];
    }
}
