<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'lastName'      =>  'required',
            'company'       =>  'required',
            'email'         =>  'required|email'
        ];
    }

    public function messages(){

        return[
            'name.required'         =>  'El nombre es obligatorio',
            'lastName.required'     =>  'El apellido es obligatorio',
            'company.required'      =>  'Debe seleccionar una empresa',
            'email.required'        =>  'El Correo Electrónico es obligatorio',
            'email.email'           =>  'Debe de ingresar un correo electrónico válido'
        ];
    }
}
