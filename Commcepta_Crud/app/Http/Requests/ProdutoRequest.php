<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //Retornar a requisição como true(que pode ser executada)
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
            //definindo as regras de validação
            'descricao' => 'required',
            'categoria' => 'required',
            'preco' => 'required|numeric'
        ];
    }
}
