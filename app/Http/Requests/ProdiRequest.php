<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProdiRequest extends FormRequest
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
    public function rules()
    {
        $prodi = $this->route('prodi');

        return [
            'kode_prodi'    => ['required','string',Rule::unique('prodi', 'kode_prodi')->ignore(optional($prodi)->id)],
            'nama_prodi'    => 'required|string',
            'jurusan'       => 'required|string'
        ];

    }

    public function messages()
    {
        return [
            'kode_prodi.unique'     => 'Kode prodi sudah terdaftar',
            'kode_prodi.required'   => 'Kode prodi harus diisi',
            'nama_prodi.required'   => 'Nama prodi harus diisi',
            'jurusan.required'      => 'Nama jurusan harus diisi'
        ];
    }

    //     public function withValidator($validator)
    // {
    //     $validator->after(function ($validator) {
    //         if ($validator->errors()->count() > 0) {
    //             // Tampilkan seluruh pesan kesalahan
    //             dd($validator->errors()->all());
    //         }
    //     });
    // }
}
