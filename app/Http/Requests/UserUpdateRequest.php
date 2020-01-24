<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\Http\Requests\Request;
class UserUpdateRequest extends FormRequest
{
    public function authorize()
	{
		return true;
	}

	public function rules()
	{
		//$id = $this->user;
		return [
			'name' => 'required|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6' 
		];
	}

}
