<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCliente extends FormRequest
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
            //unique:customer,FirstName
            "nombre" => 'required | alpha | max:10',
            "apellido" => 'required | alpha | max:10',
            "email" => 'required |email'
        ];
    }

    public function messages(){

        return[

            'nombre.required' => " Nombre obligatorio",
            'nombre.alpha' => "El campo nombre solo puede contener letras.",
    
            'apellido.required' => "Apellido obligatorio",
            'apellido.alpha' => "El campo apellido solo puede contener letras.",

            'email.required' => "Email obligatorio",
            'email.email'=>"Solo formato email   ejemplo: usuario-06@gmail.com",
    
    
     ];

    }
}



   
