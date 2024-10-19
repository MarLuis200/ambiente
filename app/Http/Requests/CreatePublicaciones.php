<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePublicaciones extends FormRequest
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
            'titulo' => 'required|unique:productos|max:255',
            'descripcion' => 'required',
            'fecha_creacion' => 'required',
            'id_tipo' => 'required',
            'id_persona' => 'required',
            'contenido' => 'required',
            'img' => 'required',
        ];


    }
}
