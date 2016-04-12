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
        return [
            'cve_producto'      =>  'max:16|required',
            'nombre'            =>  'max:60|required',
            'precio'            =>  'numeric|required',
            'marca'             =>  'max:30|required',
            'contenido_neto'    =>  'max:30|required',
            'categoria'         =>  'max:20|required',
            'imagen'            =>  'image',
            'descripcion'       =>  'max:100|required|'
        ];
    }
}
