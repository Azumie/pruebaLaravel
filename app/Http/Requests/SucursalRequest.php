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
            'codigo' => ['required', 'min:3', 'max:10'],
            'descripcion' => ['required', 'min:3', 'max:100'],
            'rif' => ['required', 'min:3', 'max:11'],
            'direccion' => ['required', 'min:3', 'max:191'],
            'correo' => ['required', 'min:3', 'max:100'],
            'telefono' => ['required', 'min:3', 'max:10'],
        ];
    }

    public function messages() {
        return [
            'codigo.required' => 'El codigo es requerido',
            'codigo.min' => 'El codigo debe contener minimo 3 carácteres',
            'codigo.max' => 'El codigo debe contener máximo 10 carácteres',
            'descripcion.required' => 'La descripcion es requerida',
            'descripcion.min' => 'La descripcion debe contener minimo 3 carácteres',
            'descripcion.max' => 'La descripcion debe contener máximo 100 carácteres',
            'rif.required' => 'El rif es requerido',
            'rif.min' => 'El rif debe contener minimo 3 carácteres',
            'rif.max' => 'El rif debe contener máximo 11 carácteres',
            'direccion.required' => 'El direccion es requerida',
            'direccion.min' => 'La direccion debe contener minimo 3 carácteres',
            'direccion.max' => 'La direccion debe contener máximo 191 carácteres',
            'correo.required' => 'El correo es requerido',
            'correo.min' => 'El correo debe contener minimo 3 carácteres',
            'correo.max' => 'El correo debe contener máximo 100 carácteres',
            'telefono.required' => 'El telefono es requerido',
            'telefono.min' => 'El telefono debe contener minimo 3 carácteres',
            'telefono.max' => 'El telefono debe contener máximo 10 carácteres',

        ];
    }
}
