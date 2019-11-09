<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            case 'POST':
                return [
                    'name' => ['required', 'string', 'max:255'],
                    'username'=> ['required', 'string', 'max:255','unique:users'],
                    'phone'=>['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'password' => ['required', 'string', 'min:8', 'confirmed']
                ];
            case 'UPDATE':
                return [
                    'name' => ['required', 'string', 'max:255'],
                    'username'=> ['required', 'string', 'max:255'],
                    'phone'=>['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255']
                ];
            case 'DEFAULT':
                return [];
        }
    }
   
}
