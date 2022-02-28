<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
            'name' => ['required'],
            'codigo' => ['required'],
            'rif' => ['required'],
            'telefono' => ['required'],
            'direccion' => ['required'],
            'email' => ['required'],
        ];
    }

    public function messages() {
        return [
            'nombre.required' => 'El nombre es requerido',
            'nombre.regex' => 'El nombre debe contener solo letras',
            'nombre.min' => 'El nombre debe contener mínimo 3 carácteres',
            'nombre.max' => 'El nombre debe contener máximo 20 carácteres',
            'codigo.required' => 'El codigo es requerido',
            'rif.required' => 'El rif es requerido',
            'telefono.required' => 'El telefono es requerido',
            'direccion.required' => 'El direccion es requerido',
            'email.required' => 'El email es requerido',
        ];
    }
}
