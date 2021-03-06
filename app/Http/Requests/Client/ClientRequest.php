<?php

namespace App\Http\Requests\Client;

use App\Http\Requests\Request;
use Illuminate\Contracts\Auth\Guard;

class ClientRequest extends Request
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
            'contact' => 'required|max:255',
            'email' => 'required|max:255',
            'phone_number' => 'required|max:255',
        ];
    }
}
