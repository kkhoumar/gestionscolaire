<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
          'name'=>'required',
          'email'=>'required',
          'role_id'=>'required',
          'password'=>'required'
        ];
    }


    public function messages()
    {
       return [
          'name.required'=>'veuillez entrer le nom',
          'email.required'=>'veuillez entrer email',
          'role_id.required'=>'choisir entrer role',
          'password.required'=>'veuillez entrer password',
       ];
    }
}
