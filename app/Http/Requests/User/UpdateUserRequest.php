<?php

namespace App\Http\Requests\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
        $userId = Auth::id();
        return [
            'name' => 'required|string|min:3|max:255|unique:users,name,'.$userId,
            'email' => 'required|string|email|max:255|unique:users,email,'.$userId,
            'password' => 'sometimes|nullable|confirmed|min:6|max:255',
            'age' => 'required|integer|min:8|max:100',
            'profession' => 'required|string|max:255',
            'town' => 'required|string|max:255'
        ];
    }
}