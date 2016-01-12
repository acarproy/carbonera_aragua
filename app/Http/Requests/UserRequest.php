<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
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
        //PUT refer to the update operation and POST to create
        $user_id       = ($this->method() == 'PUT' ? $this->route()->getParameter('users') : 'NULL');
        $password_rule = ($this->method() == 'PUT' ? 'min:6' : 'required|min:6');

        return [
            'name'       => 'required|max:255',
            'last'       => 'required|max:255',
            'ci'         => 'required|max:12|min:8',
            'email'      => 'required|max:255|email|unique:users,email,'.$user_id,
            'phone'      => 'required|max:11|min:11',
            'username'   => 'required|max:255|alpha_dash|unique:users,username,'.$user_id,
            'password'   => $password_rule,
            'avatar'     => 'mimes:jpeg,jpg,png'
        ];
    }
}
