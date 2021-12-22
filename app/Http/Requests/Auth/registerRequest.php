<?php
namespace App\Http\Requests\Auth;


use App\Rules\nationalcodeValidation;
use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
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
        return [
            'name' => 'bail|required|max:20|min:2|string',
            'family'  => 'bail|required|max:20|min:4|string',
            'gender'=> 'bail|required|in:man,woman', 
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required',
            'nationalcode'=> 'bail|required|digits_between:8,10|integer', //|unique:users
            'nationalcode'=> ["bail","required","digits_between:8,10","integer",new nationalcodeValidation], 
            'type'=> 'bail|required|in:teacher,student', 
            'email'=> 'bail|required|email|unique:users', 
            'phone' => ["bail","required","regex:/09(1[0-9]|3[1-9]|2[1-9])-?[0-9]{3}-?[0-9]{4}/"]
        ];
    }
}
        // $this->validate($request, ['nationalcode' => new nationalcodeValidation]);
