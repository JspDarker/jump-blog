<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSimplePost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return false; # if false se khong submit duoc do chua duoc xac thuc
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
            //get request from form storm.create
            'age'       => 'required|integer|max:100',
            'f_email'   => 'required|email'
        ];
    }

    public function messages()
    {
        return [
            'age.required' => 'Age is required xxx!',
            'age.max' => 'max 100 zzz!',
            'f_email.required' => 'Email is required yyy!',
        ];
    }

}
