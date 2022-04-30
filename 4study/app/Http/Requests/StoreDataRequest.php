<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDataRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', "regex:/^[a-zA-Z0-9 ']*$/", 'min:3', 'max:255'],
            'sub_name' => ['required', 'string', "regex:/^[a-zA-Z0-9 ']*$/", 'min:3', 'max:255'],
            'description' => ['required', 'string', 'min:3'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'img' => ['required', 'image', 'mimes:jpeg,jpg,png'],
            'statut' => [ 'nullable', 'string'],
        ];
    }
}
