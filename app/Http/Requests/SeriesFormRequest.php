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
            'name' => 'required|min:3|max:255',
            'seasonsQtd' => 'required|integer|min:1',
            'episodesPerSeason' => 'required|integer|min:1'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "O campo Nome é obrigatorio",
            'name.min' => "O campo Nome deve ter no minimo :min caracteres",
            'name.max' => "O campo Nome deve ter no maximo :max caracteres",
            'seasonsQtd.required' => "O campo Numero de Temporadas é obrigatorio",
            'seasonsQtd.integer' => "O campo Numero de Temporadas deve ser um numero inteiro",
            'seasonsQtd.min' => "O campo Numero de Temporadas deve ser maior que :min",
            'episodesPerSeason.required' => "O campo Episódios por Temporada é obrigatorio",
            'episodesPerSeason.integer' => "O campo Episódios por Temporada deve ser um numero inteiro",
            'episodesPerSeason.min' => "O campo Episódios por Temporada deve ser maior que :min",
        ];
    }
}
