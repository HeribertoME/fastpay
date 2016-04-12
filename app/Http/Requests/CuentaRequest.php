<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CuentaRequest extends Request
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
            'nombre'        =>  'max:30|required',
            'ap_paterno'    =>  'max:30|required',
            'ap_materno'    =>  'max:30|required',
            'edad'          =>  'numeric|required',
            'direccion'     =>  'max:60|required',
            'tel_cel'       =>  'max:10|required',
            'foto'          =>  'image',
            'user'          =>  'max:30|unique:cuenta|required|',
            'pass'          =>  'required|'

        ];
    }
}
