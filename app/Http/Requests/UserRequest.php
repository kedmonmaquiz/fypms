<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::user()->hasRole('admin')){
            return true;
        } 
        abort(404);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username'=>'required|min:8',
            'first_name'=>'required|min:3',
            'middle_name'=>'',
            'last_name'=>'required|min:3',
            'email'=>'required|email',
            'phone'=>'',
            'department_id'=>'',
            'program_id' =>'',
            'roles'=>'required',
            'project_id'=>'',
            'academic_year_id'=>'',
        ];
    }
}
