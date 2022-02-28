<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'nombre' => ['required', 'regex:/(^[a-zA-Z ]*$)/u', 'min:3', 'max:50'],
            'codigo' => ['required', 'min:3', 'max:10'],
            'rif' => ['required', 'min:3', 'max:11'],
            'telefono' => ['required', 'min:3', 'max:10'],
            'direccion' => ['required', 'min:3', 'max:200'],
            'email' => ['required', 'min:3', 'max:100'],
            'idsucursal' => ['required'],
        ];
    }

    public function messages() {
        return [
            'nombre.required' => 'El nombre es requerido',
            'nombre.regex' => 'El nombre debe contener solo letras',
            'nombre.min' => 'El nombre debe contener mínimo 3 carácteres',
            'nombre.max' => 'El nombre debe contener máximo 20 carácteres',
            'codigo.required' => 'El codigo es requerido',
            'codigo.min' => 'El codigo debe contener minimo 3 carácteres',
            'codigo.max' => 'El codigo debe contener máximo 10 carácteres',
            'rif.required' => 'El rif es requerido',
            'rif.min' => 'El rif debe contener minimo 3 carácteres',
            'rif.max' => 'El rif debe contener máximo 11 carácteres',
            'telefono.required' => 'El telefono es requerido',
            'telefono.min' => 'El telefono debe contener minimo 3 carácteres',
            'telefono.max' => 'El telefono debe contener máximo 10 carácteres',
            'direccion.required' => 'El direccion es requerido',
            'direccion.min' => 'La direccion debe contener minimo 3 carácteres',
            'direccion.max' => 'La direccion debe contener máximo 200 carácteres',
            'email.required' => 'La email es requerido',
            'email.min' => 'El email debe contener minimo 3 carácteres',
            'email.max' => 'El email debe contener máximo 100 carácteres',
            'idsucursal.required' => 'La sucursal es requerido',
        ];
    }
}
