<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
        return[
            'logo' => 'required',
            'titre' => 'required',
            'solution' => 'required',
            'dure' => 'required',
            'description' => 'required',
            'probleme' => 'required',
            'stade' => 'required',
            'nature' => 'required',
            'site' => 'required',
            'video' => 'required',
            'equipes' => 'required',
            'categorie' => 'required'
        ];
    }
}
