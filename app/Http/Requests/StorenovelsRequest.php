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

    public function messages(): array
    {
    return [
        'txtidnovels.required' => ':attribute Tidak Boleh Kosong',
        'txtidnovels.unique' => ':attribute Sudah Ada Didalam Tabel',
        'txtjudul.required' => ':attribute Tidak Boleh Kosong',
        'txtpenulis.required' => ':attribute Tidak Boleh Kosong',
        'txthalaman.required' => ':attribute Tidak Boleh Kosong',
        'txtstok.required' => ':attribute Tidak Boleh Kosong',
    ];
    }

    public function attributes(): array
    {
    return [
        'txtidnovels' => 'ID Novels',
        'txtjudul' => 'Judul',
        'txtpenulis' => ' Nama Penulis',
        'txthalaman' => 'Jumlah Halaman',
        'txtstok' => 'Jumlah Stok',
    ];
    }
}
