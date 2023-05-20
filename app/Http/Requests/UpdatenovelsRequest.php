<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\RedirectResponse;

class UpdatenovelsRequest extends FormRequest
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
    public function store($request): RedirectResponse
    {
        //validate form
    $this->validate($request, [
        'txtidnovels' =>'required|min:2',
        'txtjudul' =>'required|min:10',
        'txtpenulis' =>'required|min:5',
        'txthalaman' =>'required|min:2',
        'txtstok' =>'required|min:1'
    ]);
    }
}
