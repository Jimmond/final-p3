<?php
namespace FinalP3\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
 class StoreProductosRequest extends FormRequest
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
             'id_producto' => 'required|max: 15',
             'nom_prod' => 'required|max: 15',
             'prec_venta_total' => 'required',
             'prec_venta_unidad' => 'required',
             'prec_compra' => 'required|max: 10',
             'fecha_venc' => 'required',
             'stock' => 'required'
         ];
     }
 } 
