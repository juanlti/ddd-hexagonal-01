<?php

namespace Src\admin\user\infrastructure\validators;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id' => 'required',
            'name' => 'required|min:4|max:255',
            'email' => 'required|mail'
        ];
    }

}
