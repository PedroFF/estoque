<?php

namespace estoque\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'nome' => 'required|min:3',
            'descricao' => 'required|max:240',
            'valor' => 'required',
            'quantidade' => 'required|numeric',
            'tamanho' => 'required|max:30'
        ];
    }

    public function messages()
    {
        return [
            'required' => ' :Attribute é obrigatório!'
        ];
    }


}
