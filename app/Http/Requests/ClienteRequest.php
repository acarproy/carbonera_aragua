<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ClienteRequest extends Request
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
        //PUT refer to the update operation and POST to create
        $cliente_id = ($this->method() == 'PUT' ? $this->route()->getParameter('clientes') : 'NULL');

        return [
            'razon'     => 'required|max:255',
            'rif'       => 'required|max:20',
            'telefono'  => 'required|max:11|min:11',
            'telefono2' => 'required|max:11|min:11',
            'correo'    => 'required|max:255|email|unique:users,email,'.$cliente_id,
            'direccion' => 'required|max:255',
            'estado_id' => 'required',
            'ciudad_id' => 'required',
            //'pais_id'   => 'required|max:11|min:11',
            //'ciudad_id' => 'required|max:11|min:11',
        ];
    }
}