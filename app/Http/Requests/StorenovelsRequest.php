<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorenovelsRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'txtidnovels' => 'required|unique:novels,idnovels|min:1|max:4',
            'txtjudul' => 'required',
            'txtpenulis' => 'required',
            'txthalaman' => 'required',
            'txtstok' => 'required',
        ];
    }
}
