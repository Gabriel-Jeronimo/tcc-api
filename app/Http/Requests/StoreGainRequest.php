<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGainRequest extends FormRequest
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
            'value' => ['required', 'gt:0'],
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'value.required' => "O valor é obrigatório.",
            'description.required' => 'A descrição é obrigatória.',
            'value.gt' => "O valor do ganho precisa ser maior do que 0."
        ];
    }
}
