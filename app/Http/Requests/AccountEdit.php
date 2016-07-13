<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Contracts\Auth\Guard;
use Auth;

class AccountEdit extends Request
{



    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(Guard $guard)
    {
        return $guard->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'name' => 'required|max:255',
            'nickname'=> 'required|unique:users|max:255',
            'email' => 'email|required|unique:users,email,'. Auth::user()->id,
            'password' => 'sometimes|confirmed|min:6|max:255',
            'avatar' => 'mimes:jpeg,bmp,png|sometimes',
            'website' => 'active_url|max:255',
            'about' => 'max:65000',
            'notification' => 'boolean',
            'sex' => 'boolean',
            'phone' => 'max:255'
        ];
    }
}