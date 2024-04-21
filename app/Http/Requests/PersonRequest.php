<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|unique:people',
            'age'=>'required|regex:/^\d+(\.\d{1,2})?$/',
            'nationalityID'=>'required',
            'birthDate'=>'required'
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'name field is required',
            'name.unique' => 'name field is already existed',
             'age.required'=>'name field is required',
             'age.regex'=>'age formate is incorrect',
             'nationalityID.required'=>'nationalityID is required',
             'birthDate.required'=>'birthDate is required'

        ];
    }
}
