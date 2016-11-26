<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
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
            'name'      =>  'max:120|required',
            'apellido'  =>  'max:120|required',
            'email'     =>  'min:4|max:250|unique:users|required',
            'password'  =>  'min:4|max:10|required',
            'image'     =>  'max:250|required|image'
        ];
    }
}
