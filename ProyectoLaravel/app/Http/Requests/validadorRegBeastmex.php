<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorRegBeastmex extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'txtCorreo' => 'required|email',
            'txtContrasena' => 'required',
            'txtNombre' => 'required',
            'email' => 'required|email',
            'txtPuesto' => 'required',
            'password' => 'required',
            'txtSerie' => 'required',
            'number' => 'required',
            'txtfile' => 'required',
            'date' => 'required',
            'txtMarca' => 'required',
        ];
    }
}
