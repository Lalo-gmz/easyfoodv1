<?php

namespace EasyFood\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticuloFormRequest extends FormRequest
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
            'idcategoria'=>'requied',
            'idalmacen'=>'requied',
            'idmedida'=>'requied',
            'codigo'=>'requied|max:50',
            'nombre'=>'requied|max:100',
            'descripcion'=>'max:512',
            'imagen'=>'mimes:jpeg,bmp,png',
            'enmenu'=>'requied',
            'tipo'=>'required'
        ];
    }
}
