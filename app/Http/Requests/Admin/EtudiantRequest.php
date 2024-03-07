<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EtudiantRequest extends FormRequest
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
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required',
            'naissance'=>'required',
            'lieu_naissance'=>'required',
            'numero'=>'required',
            'role_id'=>'required',
            'mot_passe'=>'required',
            'photo'=>'required|image',

          ];
    }

    public function messages()
    {
       return [
          'nom.required'=>'veuillez entrer le nom',
          'prenom.required'=>'veuillez entrer le nom',
          'email.required'=>'veuillez entrer le nom',
          'naissance.required'=>'veuillez entrer le nom',
          'lieu_naissance.required'=>'veuillez entrer le nom',
          'numero.required'=>'veuillez entrer le nom',
          'role_id.required'=>'veuillez entrer le nom',
          'mot_passe.required'=>'veuillez entrer le nom',
          'photo.required'=>'veuillez entrer le nom',

       ];
    }
}
