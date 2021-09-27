<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmpleado extends FormRequest
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
            //
            "nombre" => 'required | alpha',
            "apellido"=> 'required | alpha',
            "titulo" => 'required',
            "direccion" => 'required',
            "ciudad" => 'required',
            "pais" => 'required',
            "telefono" => 'required | numeric',
            "email" => 'required | email',

        ];
    }


    public function messages()
    {
    return[

        'nombre.required' => " Nombre obligatorio",
        'nombre.alpha' => "El campo nombre solo puede contener letras",

        'apellido.required' => "Apellido obligatorio",
        'apellido.alpha' => "El campo apellido solo puede contener letras",

        'titulo.required' => "Titulo profesional obligatorio",
        /*'titulo.alpha' => "El campo titulo profesional solo puede contener letras",*/

        'direccion.required' => "Dirección obligatoria",

        'ciudad.required' => "ciudad obligatoria",
        /*'ciudad.alpha' => "El campo ciudad solo puede contener letras",*/

        'pais.required' => "Pais obligatorio",
        'pais.alpha' => "El campo país solo puede contener letras",

        'telefono.required' => "Telefono obligatorio",
        'telefono.numeric' => "El campo telefono solo puede contener numeros",

        
        'email.required' => "Email obligatorio",
        'email.email'=>"Solo formato email   ejemplo: usuario-06@gmail.com"
       

        


        

        
    ];



}
}

