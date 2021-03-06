<?php

namespace FinalP3\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductoRequest extends FormRequest
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
            'nom_prod' => 'required|max: 30| min: 3',
            'prec_venta_total' => 'required',
            'prec_venta_unidad' => 'required',
            'prec_compra' => 'nullable',
            'fecha_venc' => 'nullable|date'
        ];
    }
}
