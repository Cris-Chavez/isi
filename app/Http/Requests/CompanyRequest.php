<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'name'          =>  'required',
            'email'         =>  'required|email',
            'logo'          =>  'dimensions:min_width=100,min_height=100'
        ];
    }

    public function messages(){

        return[
            'name.required'         =>  'El nombre es obligatorio',
            'email.required'        =>  'El Correo Electrónico es obligatorio',
            'email.email'           =>  'Debe de ingresar un correo electrónico válido',
            'logo.dimensions'       =>  'El alto y el ancho de la imagen deben de tener como mínimo 100px'
        ];
    }
}
