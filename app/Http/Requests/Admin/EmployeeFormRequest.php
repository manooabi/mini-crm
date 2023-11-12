<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeFormRequest extends FormRequest
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
        $rules = [
            'company_id' =>[
                'required',
                'integer'
            ],
            'firstname' =>[
                'required',
                'string'

            ],
            'lastname' =>[
                'required',
                'string'
            ],
            'email' =>[
                'required',
                'string',
                'email'
            ],
            'phone' =>[
                'required',
                'numeric',
                'min:10'
            ],
            
        ];
        return $rules;
    }
}
