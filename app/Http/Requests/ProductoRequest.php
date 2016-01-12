<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductoRequest extends Request
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
        $producto_id = ($this->method() == 'PUT' ? $this->route()->getParameter('productos') : 'NULL');

        return [
            'producto_categoria_id' => 'required|exists:productos_categorias,id',
            'codigo'                => 'required|integer|unique:productos,codigo,'.$producto_id,
            'referencia'            => 'required|max:255',
            'precio'                => 'required|max:15',
        ];
    }
}