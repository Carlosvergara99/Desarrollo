<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TiendaRequest extends FormRequest
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
            'nombre' => 'required|min:3|max:255',
            'fecha_de_apertura' => 'required|date',
        ];
    }
    
 
     public function messages()
    {
    return [
        'nombre.required' => 'El nombre es obligatorio.',
        'nombre.min' => 'El nombre debe ser mínimo 3 caracteres ',
        'nombre.max' => 'El nombre no debe tener  255 caracteres',
        'fecha_de_apertura.required'=> 'la fecha de apertura es obligatoria.',
        'fecha_de_apertura.date'=> 'la fecha de apertura debe ser una fecha valida.'
    ];
}
}
