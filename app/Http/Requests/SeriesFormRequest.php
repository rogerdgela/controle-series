<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:255'
        ];
    }

    /*public function messages()
    {
        return [
            'name.required' => "O campo name é obrigatorio",
            'name.min' => "O campo name deve ter no minimo :min caracteres",
            'name.max' => "O campo name deve ter no maximo :max caracteres",
        ];
    }*/
}
