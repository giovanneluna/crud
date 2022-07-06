<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
       $rules =[
            'name' =>'required',
            'username' =>'required|string|min:5|max:32|unique:users',
            'email' =>'required|unique:users',
            'password' =>'required|string|min:6|max:90',
            'age' =>'required',
            'cpf' =>'required|min:11|max:11',
        ];

        if($this->method('PUT')){
            $rules['password'] = [
                'nullable',
                'min:6'
            ];
        }

        return $rules;
    }
}
