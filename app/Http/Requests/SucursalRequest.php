<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SucursalRequest extends FormRequest
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
            'codigo' => ['required'],
            'descripcion' => ['required'],
            'rif' => ['required'],
            'direccion' => ['required'],
            'correo' => ['required'],
            'telefono' => ['required'],
        ];
    }

    public function messages() {
        return [
            'codigo.required' => 'El codigo es requerido',
            'descripcion.required' => 'la direccion es requerida',
            'rif.required' => 'El rif es requerido',
            'direccion.required' => 'El direccion es requerido',
            'correo.required' => 'El email es requerido',
            'telefono.required' => 'El telefono es requerido',
        ];
    }
}
