<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use \Input as Input;

class newFlowerRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; /*set to true later for authentication*/
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules () {
        
        return [
            'flowername' => 'required|min:3|unique:flowers,name',
            'flowerdesc' => 'required',
            'flowerprice' => 'required|numeric|min:3',
            'file' => 'image',
        ];

        $validator = Validator::make(Input::all(), $rules);

        // check if the validator failed
        if ($validator->fails()) {
            // get the error messages from the validator
            $messages = $validator->messages();
            // redirect our user back to the form with the errors from the validator
            return Redirect::back()->withErrors($validator);
        }
    }

    public function messages () {

        return [
            'flowername.unique' => 'That flower already exists in the database',
            'flowername.required' => 'Flower\'s name is required!',
            'flowername.alpha_num' => 'Please name the flower properly',
            'flowerdesc.required' => 'Flower\'s description is required',
            'flowerprice.required' => 'Flower\'s price is required',
            'flowerprice.numeric' => 'Flowe\'s price must be a number',
            'min' => 'Too short!',
        ];
    }
}
