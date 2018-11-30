<?php

namespace FinalP3\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClientRequest extends FormRequest
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
          'email_cli' => 'required|max:30|email',
          'tel_cli' => 'required|max:10',
          'nom_cli' => 'required|max:30'
        ];
    }
}
